<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entry;
use App\User;
use Faker\Generator as Faker;



$factory->define(Entry::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'content' => $faker->text(600),
        'user_id' => 1,
    ];
});
