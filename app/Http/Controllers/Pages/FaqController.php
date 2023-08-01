<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller{

    public function __invoke(){
        return view('pages.faq');
    }

}
