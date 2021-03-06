<?php

use Faker\Generator as Faker;

$factory->define(App\Band::class, function (Faker $faker) {
    mt_srand();
    $genre = [
        'rock',
        'pop',
        'country',
        'metal'
    ];
    return [
        'name' => ucwords($faker->words(2, true)),
        'description' => $faker->text(),
        'genre' => $genre[mt_rand(0, 3)]
    ];
});
