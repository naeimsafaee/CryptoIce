<?php

namespace App\Http\Controllers\Verification;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdvanceVerificationRequest;
use App\Models\AdvanceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdvanceVerificationController extends Controller{

    public function index(){
        return view('profile.verification.advance');
    }

    public function store(AdvanceVerificationRequest $request){

        $is_natural = $request->is_natural;

        if($is_natural){

            $proof_address_file = $request->proof_of_address;
            $proof_address_name = 'files/' . time() . '-' . rand() . '.' . $proof_address_file->getClientOriginalExtension();
            Storage::disk('public')->put($proof_address_name, file_get_contents($proof_address_file));

            AdvanceRequest::query()->updateOrCreate([
                'client_id' => auth()->guard('clients')->user()->id,
            ], [
                'address' => $request->address,
                'zip_code' => $request->zip_code,
                'proof_address' => $proof_address_name,
                'client_id' => auth()->guard('clients')->user()->id,
            ]);
        } else {
            AdvanceRequest::query()->updateOrCreate([
                'client_id' => auth()->guard('clients')->user()->id,
            ], [
                'business_name' => $request->business_name,
                'email' => $request->email,
                'business_mailing_address' => $request->business_mailing_address,
                'zip_code' => $request->zip_code,
                'client_id' => auth()->guard('clients')->user()->id,
            ]);
        }

        return redirect()->route('profile');
    }
}
