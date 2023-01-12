<?php

use App\ProductItemSize;
use Illuminate\Database\Seeder;

class ProductItemSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductItemSize::truncate();   
        ProductItemSize::insert([
            [
                'product_item_id' => 1,
                'value' => 'S',
                'quantity' => rand(1, 10),
            ],
            [
                'product_item_id' => 1,
                'value' => 'M',
                'quantity' => rand(1, 10),
            ],
            [
                'product_item_id' => 1,
                'value' => 'L',
                'quantity' => rand(1, 10),
            ],
            [
                'product_item_id' => 1,
                'value' => 'XL',
                'quantity' => rand(1, 10),
            ],
            [
                'product_item_id' => 1,
                'value' => 'XXL',
                'quantity' => rand(1, 10),
            ],
            //
            [
                'product_item_id' => 2,
                'value' => 'S',
                'quantity' => rand(1, 10),
            ],
            [
                'product_item_id' => 2,
                'value' => 'M',
                'quantity' => rand(1, 10),
            ],
            [
                'product_item_id' => 2,
                'value' => 'L',
                'quantity' => rand(1, 10),
            ],
            [
                'product_item_id' => 2,
                'value' => 'XL',
                'quantity' => rand(1, 10),
            ],
            [
                'product_item_id' => 2,
                'value' => 'XXL',
                'quantity' => rand(1, 10),
            ],
            //
            [
                'product_item_id' => 3,
                'value' => 'S',
                'quantity' => rand(1, 10),
            ],
            [
                'product_item_id' => 3,
                'value' => 'M',
                'quantity' => rand(1, 10),
            ],
            [
                'product_item_id' => 3,
                'value' => 'L',
                'quantity' => 0,
            ],
            [
                'product_item_id' => 3,
                'value' => 'XL',
                'quantity' => rand(1, 10),
            ],
            //
            [
                'product_item_id' => 4,
                'value' => 'S',
                'quantity' => rand(1, 10),
            ],
            [
                'product_item_id' => 4,
                'value' => 'M',
                'quantity' => 0,
            ],
            [
                'product_item_id' => 4,
                'value' => 'L',
                'quantity' => rand(1, 10),
            ],
            [
                'product_item_id' => 4,
                'value' => 'XL',
                'quantity' => rand(1, 10),
            ],
            [
                'product_item_id' => 4,
                'value' => 'XXL',
                'quantity' => rand(1, 10),
            ],
        ]);
    }
}
