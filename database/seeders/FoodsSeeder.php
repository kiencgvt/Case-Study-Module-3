<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;

class FoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $food = new Food();
        $food->image = "image/banh_mi.jpg";
        $food->name = "banh mi";
        $food->price = 30000;
        $food->promotion_price = 10000;
        $food->service_charge = 5000;
        $food->shop_id = 2;
        $food->category_id = 2;
        $food->preparation_time = 13;
        $food->tag = "mon ngon";
        $food->save();
    }
}
