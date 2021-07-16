<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    use HasFactory;

    protected $table = 'foods';

    public function order_details()
    {
        $this->hasMany(Order_details::class);
    }

    public function category()
    {
        $this->belongsTo(Category::class);
    }

    public function shop()
    {
        $this->belongsTo(Shops::class);
    }
}
