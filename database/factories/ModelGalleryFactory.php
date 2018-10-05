<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Gallery::class, function (Faker $faker) {
    return [
        'imageURL' => $faker->jobTitle,
        'description' => $faker->jobTitle,
        'Fid' => function() {
            return \App\Model\FreelancerProfile::all()->random();
        }
    ];
});
