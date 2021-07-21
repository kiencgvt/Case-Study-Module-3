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
        $admin->phone = '0123456789';
        $admin->role = 'admin';
        $admin->save();

        $collaborator = new User();
        $collaborator->name = 'collaborator';
        $collaborator->avatar = 'image/collaborator.jpg';
        $collaborator->email = 'collaborator@gmail.com';
        $collaborator->password = Hash::make('collaborator');
        $collaborator->address = 'Công ty CP Codegym Việt Nam';
        $collaborator->phone = '0123456789';
        $collaborator->role = 'collaborator';
        $collaborator->save();

        $customer = new User();
        $customer->name = 'customer';
        $customer->avatar = 'image/customer.jpg';
        $customer->email = 'customer@gmail.com';
        $customer->password = Hash::make('customer');
        $customer->address = 'Công ty CP Codegym Việt Nam';
        $customer->phone = '0123456789';
        $customer->role = 'customer';
        $customer->save();
    }
}
