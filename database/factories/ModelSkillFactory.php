<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Skill::class, function (Faker $faker) {
    return [
        'skill' => $faker->jobTitle,
        'Fid' => function(){
            return \App\Model\FreelancerProfile::all()->random();
        }
    ];
});
