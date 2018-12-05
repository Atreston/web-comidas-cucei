<?php

use Faker\Generator as Faker;

$factory->define(App\Photo::class, function (Faker $faker) {
    return [
        'url'=> $faker->imageUrl($width = 640, $height = 480),
'uploaded_in' => $faker->dateTime($max = 'now', $timezone = null),
    ];
});
