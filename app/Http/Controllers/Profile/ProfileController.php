<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\AdvanceRequest;
use App\Models\Client;
use App\Models\CoinPrice;
use App\Models\CopyTrade;
use App\Models\FavoriteCoin;
use App\Models\IntermediateRequest;
use App\Models\Trade;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller {

    public function __invoke() {

        $client = auth()->guard('clients')->user();

        $intermediate = IntermediateRequest::query()->where('client_id', auth()->guard('clients')->user()->id)->first();
        if ($intermediate)
            $is_intermediate = $intermediate->status;
        else
            $is_intermediate = -1;

        $advance = AdvanceRequest::query()->where('client_id', auth()->guard('clients')->user()->id)->first();
        if ($advance)
            $is_advance = $advance->status;
        else
            $is_advance = -1;

        $errors = false;

        if ($is_intermediate === 2) {
            $errors = $intermediate->message;
        }

        if ($is_advance === 2) {
            $errors = $advance->message;
        }

        return view('profile.verification.verification', compact('client', 'errors', 'is_intermediate', 'is_advance'));
    }

    public function trader_profile() {

        $client = auth()->guard('clients')->user();

        if ($client->is_trader) {

            $trades = Trade::query()->where('trader_id', $client->trader->id)
                ->select('*',
                    DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
                ->orderBy('created_at')->get();

            $grouped_trades = $trades->groupBy('month');

            $copiers = CopyTrade::query()->where('trader_id', $client->trader->id)
                ->whereDate('created_at', '>', Carbon::now()->subDays(7))
                ->select('*',
                    DB::raw('YEAR(created_at) year, MONTH(created_at) month, Day(created_at) day'))
                ->get();

            $last_7_days_copiers_count = $copiers->count();

            $copiers = $copiers->groupBy('day');

            $last_last_7_days_copiers_count = CopyTrade::query()->where('trader_id', $client->trader->id)
                ->whereDate('created_at', '>=', Carbon::now()->subDays(14))
                ->whereDate('created_at', '<', Carbon::now()->subDays(7))
                ->count();

            return view('profile.trader.profile', compact('client', 'trades', 'copiers'
                , 'last_last_7_days_copiers_count', 'last_7_days_copiers_count', 'grouped_trades'));
        } else {
            return redirect()->route('profile');
        }
    }

}
