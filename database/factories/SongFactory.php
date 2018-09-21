<?php

use Faker\Generator as Faker;

$factory->define(App\Song::class, function (Faker $faker) {
    mt_srand();
    
    return [
        'name' => ucwords($faker->words(2, true)),
        'duration' => mt_rand(3600, 8000),
        'composer' => $faker->name,
        'order' => mt_rand(0, 12),
        
    ];
});
