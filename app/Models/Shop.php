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
        $this->belongsTo(User::class);
    }

    public function foods()
    {
        $this->hasMany(Food::class);
    }

    public function getImage() {
        return ($this->image) ? 'storage/' . $this->image : 'restaurant-default-image.jpg';
    }
}
