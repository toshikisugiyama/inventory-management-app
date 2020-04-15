<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Inventory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Inventory::class, function (Faker $faker) {
    return [
        'lot_code' => Str::random(10),
        'amount' => $faker->numberBetween(1, 1000),
        'dead_line' => $faker->dateTime(),
        'status_flug' => $faker->numberBetween(0, 3),
        'comment' => $faker->sentence,
    ];
});
