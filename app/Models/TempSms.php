<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempSms extends Model {
    use HasFactory;

    protected $fillable = [
        'VE',
        'phone'
    ];
}
