<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    //
    protected $table = 'reviews';
    protected $fillable = ['review', 'product_id', 'user_id'];
}