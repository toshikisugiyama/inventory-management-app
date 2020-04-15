<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Material;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Material::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'supplier' => $faker->company,
        'unit' => Str::random(2),
        'comment' => $faker->sentence,
        'inventory_id' => $faker->numberBetween(1, 50)
    ];
});
