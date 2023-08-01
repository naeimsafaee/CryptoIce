<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller{

    public function index(){

        $services = Service::all();

        return view('pages.services' , compact('services'));
    }



}
