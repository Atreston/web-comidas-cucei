<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 5, $variableNbWords = true),
		'description' => $faker->text($maxNbChars = 249),
		'posted_in' => $faker->dateTime($max = 'now', $timezone = null), // secret
		'stars' => $faker->numberBetween($min = 1, $max = 5),
    ];
});
