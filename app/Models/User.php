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

    protected $table = 'users';

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
}
