<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','text', 'image','brand','kananame','price','user_id','kategory_id','product_state_id','delivery_id'
    ];
}
