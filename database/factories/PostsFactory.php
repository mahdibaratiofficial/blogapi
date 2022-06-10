<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
use Faker\Generator as Faker;

$factory->define(Posts::class, function (Faker $faker) {

    return [
        'title'=>$faker->title(),
        'body'=>$faker->paragraph(rand(1,3))
    ];
});
