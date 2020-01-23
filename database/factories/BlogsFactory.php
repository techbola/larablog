<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(\App\Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(10),
        'body' => $faker->sentence(100),
    ];
});
