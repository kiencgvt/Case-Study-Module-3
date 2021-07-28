<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    use HasFactory;

    protected $fillable = ['order_id','food_id','quantity','price_each','created_at','updated_at'];

    public function order()
    {
       return $this->belongsTo(Order::class);
    }

    public function food()
    {

      return  $this->belongsTo(Food::class);
    }
}
