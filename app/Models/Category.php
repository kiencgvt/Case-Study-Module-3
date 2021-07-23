<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function foods()
    {
        return $this->hasMany(Food::class);
    }

    public function shops()
    {
        return $this->belongsToMany(Shop::class,'foods','category_id','shop_id');
    }
}
