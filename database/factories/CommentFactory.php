<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'text' => $faker->text($maxNbChars = 149),
		'commented_in' => $faker->dateTime($max = 'now', $timezone = null),
    ];
});
