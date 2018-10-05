<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Calendar::class, function (Faker $faker) {
    return [
        'dateStatus' => $faker->boolean,
        'Fid' => function() {
            return \App\Model\FreelancerProfile::all()->random();
        }
    ];
});
