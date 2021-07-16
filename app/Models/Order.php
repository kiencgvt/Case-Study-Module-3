<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function order_details()
    {
        $this->hasMany(Order_detail::class);
    }
}
