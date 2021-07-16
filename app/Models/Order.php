<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';

    public function users()
    {
        $this->belongsTo(Users::class);
    }

    public function order_details()
    {
        $this->hasMany(Order_details::class);
    }
}
