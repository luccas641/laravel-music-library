<?php

use Faker\Generator as Faker;

$factory->define(App\Album::class, function (Faker $faker) {
    mt_srand();
    return [
        'name' => ucwords($faker->words(2, true)),
        'year' => mt_rand(1960, 2018)
    ];
});
