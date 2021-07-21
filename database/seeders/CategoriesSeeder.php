<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Cơm';
        $category->image = 'image/com.jpg';
        $category->save();
        $category = new Category();
        $category->name = 'Đồ ăn nhanh';
        $category->image = 'image/do_an_nhanh.jpg';
        $category->save();
        $category = new Category();
        $category->name = 'Bún Phở';
        $category->image = 'image/bun_pho.jpg';
        $category->save();
        $category = new Category();
        $category->name = 'Đồ Uống';
        $category->image = 'image/do_uong.jpg';
        $category->save();
        $category = new Category();
        $category->name = 'Đồ ăn vặt';
        $category->image = 'image/do_an_vat.jpg';
        $category->save();
    }
}
