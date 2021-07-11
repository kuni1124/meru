<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery_destination extends Model
{
    protected $fillable = [
        'first_name','user_id','last_name','first_name_kana','last_name_kana','postal_code','prefectures','municipality','block','building_name','tel',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function buy()
    {
        return $this->belongsTo(Buy::class);
    }
}
