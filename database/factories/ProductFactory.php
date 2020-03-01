<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'name'  => $faker->sentence(2),
        'short' => $faker->text(1449),
        'body'  => $faker->text(1449)


    ];
});
