<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function delivery_destinations()
    {
        return $this->hasMany(Delivery_destination::class);
    }
    public function buys()
    {
        return $this->hasMany(Buy::class);
    }

    public function buymotions()
    {
        return $this->hasMany(Buy::class);
    }

    public function followings()
    {
        return $this->belongsToMany(Product::class, 'product_follow', 'product_id', 'user_id')->withTimestamps();
    }
    public function followers()
    {
        return $this->belongsToMany(User::class, 'product_follow', 'user_id', 'product_id')->withTimestamps();
    }

    public function follow($productId)
    {
        // すでにフォローしているかの確認
        $exist = $this->is_following($productId);
        // 対象が自分自身かどうかの確認
        

        if ($exist) {
            // すでにフォローしていれば何もしない
            return false;
        } else {
            // 未フォローであればフォローする
            $this->followings()->attach($productId);
            return true;
        }
        
    }

    /**
     * $userIdで指定されたユーザをアンフォローする。
     *
     * @param  int  $userId
     * @return bool
     */
    public function unfollow($productId)
    {
        // すでにフォローしているかの確認
        $exist = $this->is_following($productId);
        // 対象が自分自身かどうかの確認
        

        if ($exist) {
            // すでにフォローしていればフォローを外す
            $this->followings()->detach($productId);
            return true;
        } else {
            // 未フォローであれば何もしない
            return false;
        }
    }


    public function is_following($productId)
    {
        // フォロー中ユーザの中に $userIdのものが存在するか
        return $this->followings()->where('product_id', $productId)->exists();
    }

    public function loadRelationshipCounts()
    {
        $this->loadCount(['followings', 'followers']);
    }
    
}
