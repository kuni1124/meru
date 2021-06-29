<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategory extends Model
{

    protected $table = 'kategorys';
    protected $fillable = [
        'name', 
    ];
}
