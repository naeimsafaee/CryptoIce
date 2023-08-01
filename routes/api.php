<?php

use App\Http\Controllers\Profile\DepositController;
use App\Http\Controllers\Trade\TradeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('recent_order' , [TradeController::class , 'recentAndOrders'])->name('recent_order');