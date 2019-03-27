<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' => \App\User::all()->random(),
	    'title' => $faker->paragraph(1),
	    'body' => $faker->text(400)
    ];
});
