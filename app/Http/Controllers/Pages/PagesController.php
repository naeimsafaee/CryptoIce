<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller {

    public function __invoke($slug) {

        $page = Page::query()->where('slug' , $slug)->firstOrFail();

        return view('pages.pages' , compact('page'));
    }
}
