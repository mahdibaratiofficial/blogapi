<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comments;
use Faker\Generator as Faker;

$factory->define(Comments::class, function (Faker $faker) {
    return [
        'posts_id'=>rand(1,15),
        'user_id'=>rand(1,10),
        'body'=>$faker->realText(100)
    ];
});
