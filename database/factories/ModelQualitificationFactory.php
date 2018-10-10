<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Qualitification::class, function (Faker $faker) {
    return [
        'qualification' => $faker->jobTitle,
        'Fid' => function(){
            return \App\Model\FreelancerProfile::all()->random();
        }
    ];
});
