<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepositRequest;
use App\Mail\DepositConfirmMail;
use App\Mail\ForgetPassword;
use App\Models\Client;
use App\Models\ClientCoin;
use App\Models\ClientTransaction;
use App\Models\CoinNetwork;
use App\Models\CoinPrice;
use App\Models\NetworkAddress;
use App\Models\SystemAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Stripe\Source;
use Stripe\StripeClient;

class DepositController extends Controller {

    public function index() {
        return view('profile.wallet.deposit');
    }

    public function show($id) {

        $coin_price = CoinPrice::query()->findOrFail($id);

        $networks = $coin_price->networks;

        foreach($networks as $network) {
            $network["coin_name"] = $coin_price->coin->coin_name;

            $client_address = NetworkAddress::query()->where([
                'client_id' => auth()->guard('clients')->user()->id,
                'network_id' => $network->id,
                'coin_price_id' => $id,
            ]);

            if ($client_address->count() > 0) {
                $address = $client_address->firstOrFail()->address;
            } else {
                //"0xf104BfA4e65A3b387f0f43973a650EfeF076f3E5"

                //"http://localhost:3000/generate/"
                /*$response = Http::get(config('constants.NODE_URL') . "/generate/" . strtolower($network->symbol) . "/" . auth()->guard('clients')->user()->id, []);

//                return response($response->body());

                if ($response->status() === 200) {

                    $address = $response->body();

                    $contract_address = CoinNetwork::query()->where([
                        'coin_price_id' => $id,
                        'network_id' => $network->id,
                        ])->firstOrFail()->contract_address;

                    NetworkAddress::query()->updateOrCreate([
                        'client_id' => auth()->guard('clients')->user()->id,
                        'network_id' => $network->id,
                        'address' => $address,
                        'coin_price_id' => $id,
                        'balance' => 0,
                        'contract_address' => $contract_address,
                    ]);
                } else {
                    $address = "not available";
                }*/

                $addresses = SystemAddress::query()->inRandomOrder()->where('network_id', $network->id)->limit(1)->get();
                if ($addresses->count() > 0)
                    $address = $addresses->first()->address;
                else
                    $address = "Not available";

            }
            $network["address"] = $address;
        }

        return _response($networks);
    }

    public function store(Request $request) {

        \Stripe\Stripe::setApiKey(config('constants.STRIPE_SECRET'));

        if ($request->type === "sepa_debit") {
            $source = \Stripe\Source::create([
                "type" => "sepa_debit",
                "sepa_debit" => ["iban" => "DE89370400440532013000"],
                "currency" => "eur",
                "owner" => [
                    "name" => auth()->guard('clients')->user()->username,
                    /*"address" => [
                        "city" => "Frankfurt",
                        "country" => "DE",
                        "line1" => "Genslerstraße 24",
                        "postal_code" => "15230",
                        "state" => "Brandenburg",
                    ]*/
                ],
            ]);

            return $source->mandate->url;
//            die(json_encode($source->mandate->url));
        } elseif ($request->type === 'visa') {

            try {

                $paymentIntent = \Stripe\PaymentIntent::create([
                    'amount' => $request->amount * 100,
                    'currency' => 'eur',
                    'automatic_payment_methods' => [
                        'enabled' => true,
                    ],
                ]);

                $output = [
                    'clientSecret' => $paymentIntent->client_secret,
                ];

                return response()->json($output);
            } catch(\Exception $e) {
                return response()->json(json_encode(['error' => $e->getMessage()]), 500);
            }
        } else {
            $source = \Stripe\Source::create([
                'type' => $request->type,
                'amount' => $request->amount * 100,
                'currency' => 'eur',
                'redirect' => ['return_url' => route('callback_api')],
            ]);

            return $source->redirect->url;
        }
//        $source->id;

    }

    public function request(DepositRequest $request) {
        \App\Models\DepositRequest::query()->create([
            'tx_id' => $request->transaction_id,
            'coin_price_id' => $request->coin_price_id,
            'network_id' => $request->network_id,
            'amount' => $request->amount,
            'client_id' => auth()->guard('clients')->user()->id,
        ]);

        ClientTransaction::query()->create([
            'client_id' => auth()->guard('clients')->user()->id,
            'amount' => $request->amount,
            'coin_id' => $request->coin_price_id,
            'network_id' => $request->network_id,
            'is_deposit' => true,
        ]);

        return redirect()->route('transaction');
    }

    public function callback(Request $request) {
//        $client_secret = $request->client_secret;
        $source = $request->source;

        \Stripe\Stripe::setApiKey(config('constants.STRIPE_SECRET'));
        $retrieve = \Stripe\Source::retrieve($source);

        $status = $retrieve->status;
        $client = auth()->guard('clients')->user();
        $amount = $retrieve->amount / 100;

        if ($status == "failed") {

            ClientTransaction::query()->create([
                'client_id' => $client->id,
                'amount' => $amount,
                'is_deposit' => true,
                'status' => 2
            ]);

            return redirect()->route('home');
        } else {

            $client->wallet += $amount;
            $client->save();

            ClientTransaction::query()->create([
                'client_id' => $client->id,
                'amount' => $amount,
                'is_deposit' => true,
                'status' => 1
            ]);

            Mail::to(["email" => $client->email])->send(new DepositConfirmMail($amount));

            return redirect()->route('transaction');
        }

    }

    public function reject_request($id) {
        $request = \App\Models\DepositRequest::query()->findOrFail($id);
        $request->delete();

        return redirect()->route('voyager.deposit-requests.index');
    }

    public function accept_request($id){
        $request = \App\Models\DepositRequest::query()->findOrFail($id);

        $client = Client::query()->findOrFail($request->client_id);

        $client_coin = ClientCoin::query()->where([
            'client_id' => $request->client_id,
            'coin_id' => $request->coin_price_id
        ])->firstOrFail();

        $client_coin->amount += $request->amount;
        $client_coin->save();

        $request->delete();

        return redirect()->route('voyager.deposit-requests.index');
    }

}
