<?php

use App\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::truncate();
        Gallery::insert([
            [
                'product_item_id' => 1,
                'image_id' => 1,
            ],
            [
                'product_item_id' => 1,
                'image_id' => 2,
            ],
            [
                'product_item_id' => 1,
                'image_id' => 3,
            ],
            [
                'product_item_id' => 2,
                'image_id' => 4,
            ],
            [
                'product_item_id' => 2,
                'image_id' => 5,
            ],
            [
                'product_item_id' => 2,
                'image_id' => 6,
            ],
            //
            [
                'product_item_id' => 3,
                'image_id' => 9,
            ],
            [
                'product_item_id' => 3,
                'image_id' => 10,
            ],
            [
                'product_item_id' => 3,
                'image_id' => 11,
            ],
            //
            [
                'product_item_id' => 4,
                'image_id' => 12,
            ],
            [
                'product_item_id' => 4,
                'image_id' => 13,
            ],
            [
                'product_item_id' => 4,
                'image_id' => 14,
            ],
        ]);
    }
}
