<?php

use App\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::truncate();
        Color::insert([
            [
                'name' => 'Màu Trắng',
                'sort' => '1',
                'image' => 'https://media.coolmate.me/cdn-cgi/image/width=160,height=160,quality=80,format=auto/uploads/August2022/strikew2.jpg'
            ],
            [
                'name' => 'Màu Đen',
                'sort' => '2',
                'image' => 'https://media.coolmate.me/cdn-cgi/image/width=160,height=160,quality=80,format=auto/uploads/July2022/den_vang_4.jpg'
            ],
            [
                'name' => 'Màu Nude',
                'sort' => '3',
                'image' => 'https://media.coolmate.me/cdn-cgi/image/width=160,height=160,quality=80,format=auto/uploads/July2022/den_vang_4.jpg'
            ],
            [
                'name' => 'Màu Đỏ',
                'sort' => '4',
                'image' => 'https://media.coolmate.me/cdn-cgi/image/width=160,height=160,quality=80,format=auto/uploads/July2022/den_vang_4.jpg'
            ],
            [
                'name' => 'Màu Xanh Lục',
                'sort' => '5',
                'image' => 'https://media.coolmate.me/cdn-cgi/image/width=160,height=160,quality=80,format=auto/uploads/September2022/for-winter-reu-1_(1).jpg'
            ],
            [
                'name' => 'Màu Xanh Dương',
                'sort' => '6',
                'image' => 'https://media.coolmate.me/cdn-cgi/image/width=160,height=160,quality=80,format=auto/uploads/July2022/den_vang_4.jpg'
            ],
            [
                'name' => 'Màu Xanh Than',
                'sort' => '7',
                'image' => 'https://media.coolmate.me/cdn-cgi/image/width=160,height=160,quality=80,format=auto/uploads/September2022/polousanavy14.jpg'
            ],

        ]);
    }
}
