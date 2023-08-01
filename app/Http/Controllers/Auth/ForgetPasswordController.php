<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgetPaswordRequest;
use App\Http\Requests\UpdatePaswordRequest;
use App\Mail\ForgetPassword;
use App\Mail\VerifyEmail;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ForgetPasswordController extends Controller {

    public function index() {
        return view('auth.pages.forget');
    }

    public function store(ForgetPaswordRequest $request) {

        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
        {
            $secret = '6LeVauwdAAAAAHNmxx0aQjMNw__pKCzKh2cR3ahB';
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
            if(!$responseData->success)
                throw ValidationException::withMessages(['password' => "CAPTCHA not validated!"]);
        }else {
            throw ValidationException::withMessages(['password' => "CAPTCHA not validated!"]);
        }

        $client = Client::query()->where('email', $request->email)->firstOrFail();

        $reset_link = generateRandomString(10);
        $client->reset_link = $reset_link;
        $client->save();

        Mail::to(["email" => $client->email])->send(new ForgetPassword($reset_link));

        return view('auth.pages.forget-success' , compact('client'));
    }

    public function show($id) {
        $client = Client::query()->where('reset_link', $id)->first();
        if(!$client)
            return view('auth.pages.forget-error');

        return view('auth.pages.change_password', compact('id'));
    }

    public function update(UpdatePaswordRequest $request, $id) {

        $client = Client::query()->where('reset_link', $id)->firstOrFail();

        $client->password = Hash::make($request->password);
        $client->reset_link = null;
        $client->save();

        return redirect()->route('login');
    }

}
