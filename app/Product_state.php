<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_state extends Model
{   protected $table = 'product_states';
    protected $fillable = [
        'text', 
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
