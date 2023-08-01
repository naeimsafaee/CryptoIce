<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\LoginRequest;
use App\Mail\ChangePasswordMail;
use App\Mail\ForgetPassword;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ChangePasswordController extends Controller
{

    public function index()
    {
        return view('auth.pages.change_old_password');
    }

    public function store(ChangePasswordRequest $request)
    {

        $client = Client::query()->findOrFail(auth()->guard('clients')->user()->id);

        if (!password_verify($request->old_password, $client->password)) {
            throw ValidationException::withMessages(['old_password' => 'Your old password is wrong!']);
        }

        $client->password = Hash::make($request->password);
        $client->save();

        Mail::to(["email" => $client->email])->send(new ChangePasswordMail());

        return redirect()->route('profile');
    }
}
