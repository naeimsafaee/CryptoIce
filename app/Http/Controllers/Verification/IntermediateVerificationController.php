<?php

namespace App\Http\Controllers\Verification;

use App\Http\Controllers\Controller;
use App\Http\Requests\IntermediateVerificationRequest;
use App\Models\IntermediateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IntermediateVerificationController extends Controller{

    public function index(){
        return view('profile.verification.intermediate');
    }

    public function store(IntermediateVerificationRequest $request){

        $facial_photo_file = $request->facial_photo;
        $facial_photo_name = 'files/' . time() . '-' . rand() . '.' . $facial_photo_file->getClientOriginalExtension();
        Storage::disk('public')->put($facial_photo_name, file_get_contents($facial_photo_file));

        $id_card_photo_file = $request->id_card_photo;
        $id_card_photo_name = 'files/' . time() . '-' . rand() . '.' . $id_card_photo_file->getClientOriginalExtension();
        Storage::disk('public')->put($id_card_photo_name, file_get_contents($id_card_photo_file));

        IntermediateRequest::query()->updateOrCreate([
            'client_id' => auth()->guard('clients')->user()->id,
        ], [
            'card_id' => $request->id,
            'facial_photo' => $facial_photo_name,
            'id_card_photo' => $id_card_photo_name,
            'client_id' => auth()->guard('clients')->user()->id,
            'message' => "",
            'status' => 0,
        ]);

        return redirect()->route('profile');
    }

}
