<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'permalink' => Str::random(50),
        'product_code' => 'VD' . rand(1000,2000),
        'name' => $faker->unique()->userName,
        'content' => $faker->text,
        'category_id' => rand(1,3),
    ];
});
