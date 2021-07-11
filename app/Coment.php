<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    protected $fillable = [
        'coment',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function buys()
    {
        return $this->hasMany(Buy::class);
    }
}
