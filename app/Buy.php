<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    protected $fillable = [
        'date','user_id','product_id','text',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function coment()
    {
        return $this->belongsTo(Coment::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function delivery_destinations()
    {
        return $this->hasMany(Delivery_destination::class);
    }
}
