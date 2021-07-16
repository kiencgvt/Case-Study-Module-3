<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shops extends Model
{
    use HasFactory;
    protected $table = 'shops';

    public function Users()
    {
        $this->belongsTo(Users::class);
    }

    public function foods()
    {
        $this->hasMany(Foods::class);
    }
}
