<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'amount' => $faker->randomFloat(2, 0, 8),
        'qty_stock' => $faker->randomNumber(2),
    ];
});
