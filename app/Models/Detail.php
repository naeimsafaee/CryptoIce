<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Detail extends Model{
    use HasFactory, Translatable;

    protected $translatable = ['title', 'description', 'key'];

}
