<?php

use Faker\Generator as Faker;

$factory->define(GoViba\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(6),
        'price' => $faker->randomNumber(5),
    ];
});
