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
                'name' => 'blue',
                'sort' => '1'
            ],
            [
                'name' => 'green',
                'sort' => '2'
            ],
            [
                'name' => 'red',
                'sort' => '3'
            ],
        ]);
    }
}
