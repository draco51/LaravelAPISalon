<?php

use Faker\Generator as Faker;

$factory->define(App\Model\FreelancerProfile::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'location' => $faker->city,
        'hourRate' => $faker->numberBetween($min = 10, $max = 1000),
        'description' => $faker->paragraph,
        'profileTitle' => $faker->domainWord,
        'rating' => $faker->numberBetween($min = 1, $max = 5)
    ];
});
