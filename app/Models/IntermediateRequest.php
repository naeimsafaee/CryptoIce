<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntermediateRequest extends Model{
    use HasFactory;

    protected $fillable = [
        'card_id',
        'facial_photo',
        'id_card_photo',
        'client_id',
        'message',
        'status',
    ];

    public function scopeActive($query) {
        return $query->where('status', 0);
    }

}
