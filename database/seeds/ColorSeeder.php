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
            ],
            [
                'name' => 'Màu Đen',
                'sort' => '2',
            ],
            [
                'name' => 'Màu Nude',
                'sort' => '3',
            ],
            [
                'name' => 'Màu Đỏ',
                'sort' => '4',
            ],
            [
                'name' => 'Màu Xanh Lục',
                'sort' => '5',
            ],
            [
                'name' => 'Màu Xanh Dương',
                'sort' => '6',
            ],
            [
                'name' => 'Màu Xanh Than',
                'sort' => '7',
            ],

        ]);
    }
}
