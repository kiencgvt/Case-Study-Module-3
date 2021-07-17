<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Models\Category();
        $category->name = 'Cơm';
        $category->save();
        $category = new \App\Models\Category();
        $category->name = 'Đồ ăn nhanh';
        $category->save();
        $category = new \App\Models\Category();
        $category->name = 'Bún Phở';
        $category->save();
        $category = new \App\Models\Category();
        $category->name = 'Đồ Uống';
        $category->save();
        $category = new \App\Models\Category();
        $category->name = 'Đồ ăn vặt';
        $category->save();
    }
}
