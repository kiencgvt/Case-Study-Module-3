<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable = ['id','order_date','require_date','status','user_id','comment','total_price','created_at','updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order_details()
    {
       return $this->hasMany(Order_detail::class);
    }
}
