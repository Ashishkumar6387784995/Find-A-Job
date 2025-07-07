<?php

namespace App\Models\shop;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserFavouriteShops extends Model
{
    use HasFactory;

    protected $table = 'user_favourite_shops';

    protected $fillable = [
        'user_id',
        'shop_id',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function shop()
    {
        return $this->belongsTo(\App\Models\Shop\allshop::class);
    }
}
