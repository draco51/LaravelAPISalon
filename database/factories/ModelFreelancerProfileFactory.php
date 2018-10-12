<?php

use Faker\Generator as Faker;

$factory->define(App\Model\FreelancerProfile::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'location' => $faker->city,
        'hourRate' => $faker->numberBetween($min = 1, $max = 20),
        'description' => $faker->paragraph,
        'profileTitle' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'rating' => $faker->numberBetween($min = 1, $max = 5),
        'propicURL' => $faker->name
    ];
});
