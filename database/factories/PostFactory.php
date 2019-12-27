<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(1),
        'content' => $faker->paragraph(100)
    ];
});
