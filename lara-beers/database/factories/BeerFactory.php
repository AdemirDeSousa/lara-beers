<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Beer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->numberBetween(1, 100)
    ];
});
