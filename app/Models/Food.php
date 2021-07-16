<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';

    public function order_details()
    {
        $this->hasMany(Order_detail::class);
    }

    public function category()
    {
        $this->belongsTo(Category::class);
    }

    public function shop()
    {
        $this->belongsTo(Shop::class);
    }
}
