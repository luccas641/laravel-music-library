<?php

use Faker\Generator as Faker;

$factory->define(App\Album::class, function (Faker $faker) {
    mt_srand();
    return [
        'name' => $faker->name,
        'year' => mt_rand(1960, 2018)
    ];
});
