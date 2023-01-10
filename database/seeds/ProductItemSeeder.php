<?php

use App\ProductItem;
use Illuminate\Database\Seeder;

class ProductItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductItem::truncate();
        ProductItem::insert([
            [
                'product_id' => 1,
                'product_item_code' => 'DC501-Nude',
                'name' => 'Váy dạ hội đuôi cá DC501',
                'cost' => 1000000,
                'price' => 1000000,
                'color_id' => 1,
                'color_avatar_id' => 7,
                'gallery_id' => 1,
            ],
            [
                'product_id' => 1,
                'product_item_code' => 'DC501-Nude',
                'name' => 'Váy dạ hội đuôi cá DC501',
                'cost' => 1000000,
                'price' => 1000000,
                'color_id' => 1,
                'color_avatar_id' => 8,
                'gallery_id' => 2,
            ],
            [
                'product_id' => 2,
                'product_item_code' => 'DC502-Nude',
                'name' => 'Váy dạ hội đuôi cá DC502',
                'cost' => 1000000,
                'price' => 1000000,
                'color_id' => 1,
                'color_avatar_id' => 15,
                'gallery_id' => 3,
            ],
            [
                'product_id' => 2,
                'product_item_code' => 'DC502-Nude',
                'name' => 'Váy dạ hội đuôi cá DC502',
                'cost' => 1000000,
                'price' => 1000000,
                'color_id' => 1,
                'color_avatar_id' => 16,
                'gallery_id' => 4,
            ],
        ]);
    }
}
