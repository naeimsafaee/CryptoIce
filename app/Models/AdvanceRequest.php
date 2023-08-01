<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvanceRequest extends Model{
    use HasFactory;

    protected $fillable = [
        'address',
        'zip_code',
        'proof_address',
        'business_name',
        'email',
        'business_mailing_address',
        'client_id',
    ];

    public function scopeActive($query) {
        return $query->where('status', 0);
    }

}
