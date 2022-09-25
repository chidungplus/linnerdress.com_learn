<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'admin_id' => 1,
        'permalink' => Str::random(50),
        'product_code' => 'VD' . rand(1000,2000),
        'cost' => rand(1,50) * 1000,
        'price' => rand(1,50) * 1000,
        'price_rent' => rand(1,50) * 1000,
        'color_id' => rand(1,7),
        'name' => $faker->unique()->userName,
        'content' => $faker->text,
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'category_id' => rand(1,3),
    ];
});
