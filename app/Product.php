<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','text', 'image','brand','kananame','price','user_id','kategory_id','product_state_id','delivery_id','kategory_name','brand_name','serch_name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }
    public function kategory()
    {
        return $this->belongsTo(Kategory::class);
    }
    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }
    public function product_state()
    {
        return $this->belongsTo(Product_state::class);
    }
    public function buymotions()
    {
        return $this->hasMany(Buy::class);
    }
   
}
