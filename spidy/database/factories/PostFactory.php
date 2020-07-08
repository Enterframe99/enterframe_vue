<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text(180),
        'content' => $faker->sentence(100),
        'user_id' => User::all()->random()->id
    ];
});


