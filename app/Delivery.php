<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table = 'deliverys';
    protected $fillable = [
        'text', 
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
