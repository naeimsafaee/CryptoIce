<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawFiat extends Model {
    use HasFactory;

    protected $fillable = [
        'amount',
        'selected_type',
        'fullname',
        'bic_code',
        'iban_account_number',
        'country',
        'city',
        'address',
        'post_code',
        'ach_routing',
        'account_number',
    ];
}
