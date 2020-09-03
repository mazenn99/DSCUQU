<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Comments::class, function (Faker $faker) {
    return [
        'users_id' => NULL,
        'article_id' => $faker->numberBetween('1' , '130'),
        'content'    => $faker->sentence('30') ,
        'created_at' => $faker->dateTime
    ];
});
