<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller{

    public function __invoke($id){

        $detail = Detail::query()->where('key' , $id)->firstOrFail();

        return view('pages.detail' , compact('detail'));
    }

}
