<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comments;
use Faker\Generator as Faker;

$factory->define(Comments::class, function (Faker $faker) {
    return [
        'email'=>$faker->safeEmail(),
        'name'=>$faker->lastName(),
        'posts_id'=>rand(1,4),
        'body'=>$faker->realText(100)
    ];
});
