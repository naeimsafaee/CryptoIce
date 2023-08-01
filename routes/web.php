<?php

use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Auth\EmailVerifyController;
use App\Http\Controllers\Auth\ForgetPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PhoneVerifyController;
use App\Http\Controllers\Auth\Security\AuthenticatorController;
use App\Http\Controllers\Auth\Security\Email2FaController;
use App\Http\Controllers\Auth\Security\SecurityController;
use App\Http\Controllers\Auth\Security\Sms2FaController;
use App\Http\Controllers\Blog\BlogCategoryController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Pages\ContactUsController;
use App\Http\Controllers\Pages\DetailController;
use App\Http\Controllers\Pages\FaqController;
use App\Http\Controllers\Pages\FavoriteController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Pages\PricesController;
use App\Http\Controllers\Pages\TransactionController;
use App\Http\Controllers\Profile\DashboardController;
use App\Http\Controllers\Profile\DepositController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Profile\RequestController;
use App\Http\Controllers\Profile\Trader\CopyTraderController;
use App\Http\Controllers\Profile\WalletController;
use App\Http\Controllers\Profile\WithdrawController;
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\Trade\TradeController;
use App\Http\Controllers\Verification\AdvanceVerificationController;
use App\Http\Controllers\Verification\BasicVerificationController;
use App\Http\Controllers\Verification\IntermediateVerificationController;
use App\Http\Controllers\Verification\VerficationController;
use App\Mail\RequestEnableEmailAuthenticateMail;
use App\Models\RequestTrader;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

if (!function_exists('parseLocale')) {
    function parseLocale() {
        $locale = request()->segment(1);
        if (in_array($locale, ["en", "fr", "de"])) {
            app()->setLocale($locale);
            return $locale;
        }
        app()->setLocale('en');
        return '/';
    }
}

Route::get('locale/{lang}', function($lang) {
    $langs = ['en', 'fr', 'de'];
    if (in_array($lang, $langs)) {
        Session(['locale' => $lang]);
        return ['success' => true];
    } else {
        return ['success' => false, 'error' => 'out of range'];
    }
});

Route::prefix(parseLocale())->middleware('set_local')->group(function() {

    Route::get('/', HomeController::class)->name('home');
    Route::get('/prices', PricesController::class)->name('prices');
    Route::get('/prices_api', [PricesController::class, 'prices_api'])->name('prices_api');
    Route::get('/home_prices_api', [PricesController::class, 'home_prices_api'])->name('home_prices_api');

    Route::resource('/blog', BlogController::class);
    Route::get('/blog/category/{category_id}', [BlogCategoryController::class, 'index']);

    Route::resource('/service', ServiceController::class);

    Route::get('/detail/{id}', DetailController::class)->name('detail');

    Route::get('/faq', FaqController::class)->name('faq');
    Route::apiResource('/contact_us', ContactUsController::class);

    Route::middleware('is_login')->group(function() {

        Route::apiResource('/request', RequestController::class);

        Route::post('/submit_enable_sms', [Sms2FaController::class, 'enable_sms'])->name('enable_sms');
        Route::get('/security', SecurityController::class)->name('security');
        Route::get('/enable_authenticator', AuthenticatorController::class)->name('show_enable_authenticator');
        Route::get('/submit_authenticator', [AuthenticatorController::class, 'enable'])->name('submit_enable_authenticator');
        Route::get('/show_enter_verify', [AuthenticatorController::class, 'show_enter_verify'])->name('show_enter_verify');


        Route::get('/enable_sms', Sms2FaController::class)->name('show_enable_sms');
        Route::post('/enable_sms', [Sms2FaController::class, 'request_enable_sms'])->name('request_enable_sms');

        Route::get('/enable_email', Email2FaController::class)->name('show_enable_email');

        Route::post('/enable_email', [
            Email2FaController::class,
            'request_enable_email',
        ])->name('request_enable_email')->middleware(['throttle:10,1']);


        Route::middleware('is_verify')->group(function() {

            Route::resource('/change_password', ChangePasswordController::class);

            Route::apiResource('/favorite', FavoriteController::class);

            Route::get('/dashboard', DashboardController::class)->name('dashboard');

            Route::get('/trade', TradeController::class)->name('trade');

            Route::get('/buy_trade', [TradeController::class, 'show_manual_buy'])->name('buy_trade_manual');
            Route::post('/submit_buy_trade', [TradeController::class, 'submit_manual_buy'])->name('submit_buy_trade');

            Route::get('/sell_trade', [TradeController::class, 'show_manual_sell'])->name('sell_trade_manual');
            Route::post('/submit_sell_trade', [TradeController::class, 'submit_manual_sell'])->name('submit_sell_trade');

            Route::prefix('profile')->group(function() {

                Route::get('/', ProfileController::class)->name('profile');
                Route::get('/trader_profile', [ProfileController::class , 'trader_profile'])->name('trader_profile123');

                Route::apiResource('/deposit', DepositController::class);
                Route::post('/deposit_request', [DepositController::class, 'request'])->name('deposit_request');
                Route::get('/deposit_callback', [DepositController::class, 'callback'])->name('callback_api');

                Route::get('/wallet', WalletController::class)->name('wallet');

                Route::apiResource('/withdraw', WithdrawController::class);
                Route::post('/withdraw_fiat', [WithdrawController::class , 'withdraw_fiat'])->name('withdraw_fiat');

                Route::get('/transaction', TransactionController::class)->name('transaction');

                Route::get('info', function() {
                    return view('profile.profile');
                })->name('profile_info');

                Route::prefix('verification')->group(function() {

//                    Route::get('/', VerficationController::class)->name('verification_list');

                    Route::apiResource('basic', BasicVerificationController::class);
                    Route::apiResource('intermediate', IntermediateVerificationController::class);
                    Route::apiResource('advance', AdvanceVerificationController::class);

                });

                Route::post('buy_crypto', [TradeController::class, 'buy_crypto'])->name('buy_crypto');
                Route::post('sell_crypto', [TradeController::class, 'sell_crypto'])->name('sell_crypto');
                Route::get('cancel_order/{order_id}', [TradeController::class, 'cancel_order'])->name('cancel_order');
            });

            Route::prefix('trader')->group(function() {
                Route::get('/', function() {
                    return view('profile.trader.profile');
                })->name('trader_profile');

            });

            Route::apiResource('/copy_trade', CopyTraderController::class);

        });

        Route::get('/logout', [LoginController::class, 'logout']);

    });

    Route::get('/resend_email', [EmailVerifyController::class, 'resend_email'])->name('resend_email')/*->middleware(['throttle:10,1'])*/;
    Route::resource('/verify_email', EmailVerifyController::class)->middleware(['throttle:10,1']);
    Route::resource('/verify_phone', PhoneVerifyController::class)->middleware(['throttle:10,1']);
    Route::post('/verify_phone', [PhoneVerifyController::class, 'sumbit'])->name('do_verify_phone')->middleware(['throttle:10,1']);

    Route::get('/enter_2fa', [AuthenticatorController::class, 'enter'])->name('enter_2fa');
    Route::post('/enter_2fa', [AuthenticatorController::class, 'verify'])->name('do_enter_2fa')->middleware(['throttle:10,1']);

    Route::get('/change_number', function() {
        return redirect()->route('register')->withInput(['is_number' => '1']);
    })->name('change_number');

//    ->middleware(['throttle:10,1'])
    Route::middleware(['throttle:10,1'])->group(function() {
        Auth::routes();
    });
    Route::resource('/forget_password', ForgetPasswordController::class)->middleware(['throttle:10,1']);
//    Route::post('/login_with_phone', [LoginController::class , 'login_with_phone'])->name('login_with_phone');

    Route::get('/enable_email/{reset_link}', [Email2FaController::class, 'enable_email'])->name('enable_email')->middleware(['throttle:10,1']);

    Route::fallback(function() {
        return view("errors.404");
    });

});

Route::get('page/{slug}', PagesController::class);

Route::group(['prefix' => 'admin'], function() {
    Voyager::routes();

});

Route::get('reject_deposit_request/{id}', [DepositController::class, 'reject_request'])->name('reject_deposit_request');
Route::get('accept_deposit_request/{id}', [DepositController::class, 'accept_request'])->name('accept_deposit_request');

Route::get('increase_client_status/{id}', function($id) {

    $advance = \App\Models\AdvanceRequest::query()->findOrFail($id);
    $advance->status = 1;
    $advance->save();

    $client = \App\Models\Client::query()->findOrFail($advance->client_id);
    $client->status = 2;
    $client->send_verification_email();

    $client->save();

    return redirect()->route('voyager.advance-requests.index');
})->name('increase_client_status');
Route::post('decrease_client_status/{id}', function(Illuminate\Http\Request $request, $id) {

    $advance = \App\Models\AdvanceRequest::query()->findOrFail($id);
    $advance->status = 2;
    $advance->save();

    $client = \App\Models\Client::query()->findOrFail($advance->client_id);
    $client->send_verification_email(false, $request->reason);

    return redirect()->route('voyager.advance-requests.index');
})->name('decrease_client_status');
Route::get('show_decrease_client_status/{id}', function($id) {
    return view('vendor.voyager.advance-requests.reason');
})->name('show_decrease_client_status');

Route::get('increase_client_status1/{id}', function($id) {

    $advance = \App\Models\IntermediateRequest::query()->findOrFail($id);
    $advance->status = 1;
    $advance->save();

    $client = \App\Models\Client::query()->findOrFail($advance->client_id);
    $client->status = 1;
    $client->save();
    $client->send_verification_email();

    return redirect()->route('voyager.intermediate-requests.index');
})->name('increase_client_status1');


Route::post('decrease_client_status1/{id}', function(Illuminate\Http\Request $request, $id) {

    $advance = \App\Models\IntermediateRequest::query()->findOrFail($id);
    $advance->status = 2;
    $advance->save();

    $client = \App\Models\Client::query()->findOrFail($advance->client_id);
    $client->send_verification_email(false, $request->reason);

    return redirect()->route('voyager.intermediate-requests.index');
})->name('decrease_client_status1');

Route::get('accept_trader/{id}', function(Illuminate\Http\Request $request, $id) {

    $request_trader = RequestTrader::query()->findOrFail($id);

    $request_trader->status = 1;
    $request_trader->save();

    $client = \App\Models\Client::query()->findOrFail($request_trader->client_id);
    $client->is_trader = true;
    $client->save();

    return redirect()->route('voyager.request-traders.index');
})->name('accept_trader');

Route::get('reject_trader/{id}', function(Illuminate\Http\Request $request, $id) {

    $request_trader = RequestTrader::query()->findOrFail($id);

    $client = \App\Models\Client::query()->findOrFail($request_trader->client_id);

    $request_trader->delete();

    Mail::to(["email" => $this->email])->send(new \App\Mail\RejectTraderRequest());

    return redirect()->route('voyager.request-traders.index');
})->name('reject_trader');


Route::get('show_decrease_client_status1/{id}', function($id) {
    return view('vendor.voyager.intermediate-requests.reason');
})->name('show_decrease_client_status1');

Route::get('fee', function() {
    return view('pages.fee');
})->name('fee');
