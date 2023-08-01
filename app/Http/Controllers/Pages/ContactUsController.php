<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller {

    public function index() {
        return view('pages.contact_us');
    }

    public function store(ContactUsRequest $request) {

        ContactUs::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'text' => $request->text
        ]);

        return redirect()->route('contact_us.index')->with(['success' => true]);
    }

}
