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
        $shop->name = 'Tiger Sugar - Vũ Trọng Phụng';
        $shop->image = 'image/tiger_sugar.jpg';
        $shop->address = '3 Ngõ 98 Vũ Trọng Phụng, Thanh Xuân, Hà Nội';
        $shop->user_id = 2;
        $shop->save();

        $shop = new Shop();
        $shop->name = 'Cơm Gà Giòn Booby - Trần Đại Nghĩa';
        $shop->image = 'image/com_ga.jpg';
        $shop->address = '28 Ngõ 183 Trần Đại Nghĩa, P. Bách Khoa, Hai Bà Trưng, Hà Nội';
        $shop->user_id = 2;
        $shop->save();

        $shop = new Shop();
        $shop->name = 'Long Thủy - Bún Thái Hải Sản - Nguyễn Ngọc Vũ';
        $shop->image = 'image/bun_thai_hai_san.jpg';
        $shop->address = '129B Nguyễn Ngọc Vũ, Cầu Giấy, Hà Nội';
        $shop->user_id = 2;
        $shop->save();

        $shop = new Shop();
        $shop->name = 'Quán Cơm Hẻm - Tây Sơn';
        $shop->image = 'image/com_hem.jpg';
        $shop->address = '3/34 Ngõ 252 Tây Sơn, Đống Đa, Hà Nội';
        $shop->user_id = 2;
        $shop->save();

        $shop = new Shop();
        $shop->name = 'Cơm Bò Sốt Nấm & Bún Miến Trộn 30k - Ngõ 132 Cầu Giấy';
        $shop->image = 'image/com_bo_sot_nam.jpeg';
        $shop->address = '47A Ngõ 132 Cầu Giấy, Cầu Giấy, Hà Nội';
        $shop->user_id = 2;
        $shop->save();
    }
}
