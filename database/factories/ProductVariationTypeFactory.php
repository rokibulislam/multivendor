<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductVariationType;
use Faker\Generator as Faker;

$factory->define(ProductVariationType::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
