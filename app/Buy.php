<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    protected $fillable = [
        'date','user_id','product_id','text',
    ];
}
