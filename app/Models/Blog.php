<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Blog extends Model{
    use HasFactory, Translatable;

    protected $translatable = ['title' , 'description'];

    public function categories(){
        return $this->belongsToMany(BlogCategory::class , BlogToBlogCategory::class);
    }


}
