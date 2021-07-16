<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';

    public function shops()
    {
        return $this->hasMany(Shops::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
