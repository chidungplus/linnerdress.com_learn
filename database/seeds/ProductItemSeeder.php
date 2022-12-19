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
                'product_id' => 2,
                'size' => 'XL',
                'quantity' => 4,
                'color_id' => 1,
                'cost' => 1000000,
                'price' => 1000000,
                'price_rent' => 1000000,
                'code' => 'DC501-Nude-XXL',
                'name' => 'Váy dạ hội đuôi cá'
            ],
            [
                'product_id' => 2,
                'size' => 'XL',
                'quantity' => 4,
                'color_id' => 2,
                'cost' => 1000000,
                'price' => 1000000,
                'price_rent' => 1000000,
                'code' => 'DC501-Nude-XXL',
                'name' => 'Váy dạ hội đuôi cá'
            ],
            [
                'product_id' => 2,
                'size' => 'XXL',
                'quantity' => 2,
                'color_id' => 5,
                'cost' => 1000000,
                'price' => 1000000,
                'price_rent' => 1000000,
                'code' => 'DC501-Nude-XXL',
                'name' => 'Váy dạ hội đuôi cá'
            ],
            [
                'product_id' => 2,
                'size' => 'L',
                'quantity' => 4,
                'color_id' => 3,
                'cost' => 1000000,
                'price' => 1000000,
                'price_rent' => 1000000,
                'code' => 'DC501-Nude-XXL',
                'name' => 'Váy dạ hội đuôi cá'
            ],
            [
                'product_id' => 2,
                'size' => 'XL',
                'quantity' => 4,
                'color_id' => 1,
                'cost' => 1000000,
                'price' => 1000000,
                'price_rent' => 1000000,
                'code' => 'DC501-Nude-XXL',
                'name' => '	Váy Dạ Hồi Dài '
            ],
        ]);
    }
}
