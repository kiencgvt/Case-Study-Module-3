<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $table = 'shops';

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function foods()
    {
        return $this->hasMany(Food::class);
    }

    public function getImage()
    {
        return ($this->image) ? 'storage/' . $this->image : 'restaurant-default-image.jpg';
    }

    public function order_details()
    {
        return $this->hasManyThrough(Order_detail::class,Food::class,'shop_id','food_id','id','id');
    }

}
