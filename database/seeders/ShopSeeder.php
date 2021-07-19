<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shop = new Shop();
        $shop->name = 'Khôi';
        $shop->image = 'Khôi';
        $shop->address = 'lạng sơn';
        $shop->user_id = 2;
        $shop->save();
    }
}
