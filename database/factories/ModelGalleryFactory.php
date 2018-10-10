<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Gallery::class, function (Faker $faker) {
    return [
        'imageURL' => $faker->imageUrl($width = 640, $height = 480),
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'Fid' => function() {
            return \App\Model\FreelancerProfile::all()->random();
        }
    ];
});
