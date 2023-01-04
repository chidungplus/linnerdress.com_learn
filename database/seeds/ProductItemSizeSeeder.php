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
                'size' => 'S',
                'quantity' => rand(1, 100),
            ],
            [
                'product_item_id' => 1,
                'size' => 'M',
                'quantity' => rand(1, 100),
            ],
            [
                'product_item_id' => 1,
                'size' => 'L',
                'quantity' => rand(1, 100),
            ],
            [
                'product_item_id' => 1,
                'size' => 'XL',
                'quantity' => rand(1, 100),
            ],
            [
                'product_item_id' => 1,
                'size' => 'XXL',
                'quantity' => rand(1, 100),
            ],
            //
            [
                'product_item_id' => 2,
                'size' => 'S',
                'quantity' => rand(1, 100),
            ],
            [
                'product_item_id' => 2,
                'size' => 'M',
                'quantity' => rand(1, 100),
            ],
            [
                'product_item_id' => 2,
                'size' => 'L',
                'quantity' => rand(1, 100),
            ],
            [
                'product_item_id' => 2,
                'size' => 'XL',
                'quantity' => rand(1, 100),
            ],
            [
                'product_item_id' => 2,
                'size' => 'XXL',
                'quantity' => rand(1, 100),
            ],
            //
            [
                'product_item_id' => 3,
                'size' => 'S',
                'quantity' => rand(1, 100),
            ],
            [
                'product_item_id' => 3,
                'size' => 'M',
                'quantity' => rand(1, 100),
            ],
            [
                'product_item_id' => 3,
                'size' => 'L',
                'quantity' => rand(1, 100),
            ],
            [
                'product_item_id' => 3,
                'size' => 'XL',
                'quantity' => rand(1, 100),
            ],
            [
                'product_item_id' => 3,
                'size' => 'XXL',
                'quantity' => rand(1, 100),
            ],
            //
            [
                'product_item_id' => 4,
                'size' => 'S',
                'quantity' => rand(1, 100),
            ],
            [
                'product_item_id' => 4,
                'size' => 'M',
                'quantity' => rand(1, 100),
            ],
            [
                'product_item_id' => 4,
                'size' => 'L',
                'quantity' => rand(1, 100),
            ],
            [
                'product_item_id' => 4,
                'size' => 'XL',
                'quantity' => rand(1, 100),
            ],
            [
                'product_item_id' => 4,
                'size' => 'XXL',
                'quantity' => rand(1, 100),
            ],
        ]);
    }
}
