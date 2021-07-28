<?php

namespace App\Models;

use App\Http\Controllers\RoleConstant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use \Illuminate\Notifications\Notifiable;
    use HasFactory;

//    protected $table = 'users';
    protected $fillable = ['id','name','avatar','email','email_verified_at','password','address','phone','role','remember_token','created_at','updated_at'];

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function isAdmin() {
        return $this->role == RoleConstant::ADMIN;
    }

    public function isCollab()
    {
        return $this->role == RoleConstant::COLLABORATOR;
    }

    public function foods()
    {
        return $this->hasManyThrough(Food::class, Shop::class, 'user_id', 'shop_id');
    }

    public function order_details()
    {
        return $this->hasManyThrough(Order_detail::class,Order::class,'order_id','user_id');
    }
}
