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

    function categories()
    {
        return $this->belongsToMany(Category::class, 'foods', 'shop_id', 'category_id');
    }
}
