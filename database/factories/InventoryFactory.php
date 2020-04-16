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
        'comment' => $faker->sentence,
        'material_id' => rand(1, 4) * 10 + 1,
    ];
});
