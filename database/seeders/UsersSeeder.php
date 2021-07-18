<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'admin';
        $admin->avatar = 'image/admin.jpg';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('admin');
        $admin->address = 'Công ty CP Codegym Việt Nam';
        $admin->phone = '0945343658';
        $admin->role = 'admin';
        $admin->save();
    }
}
