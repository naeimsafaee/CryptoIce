<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\ClientTransaction;
use Illuminate\Http\Request;

class TransactionController extends Controller{

    public function __invoke(){

        $client_id = auth()->guard('clients')->user()->id;

        $transactions = ClientTransaction::query()->where('client_id' , $client_id)->orderByDesc('created_at')->get();

        return  view('profile.transaction' , compact('transactions'));
    }


}
