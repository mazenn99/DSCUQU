<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Articles::class, function (Faker $faker) {
    $course = [
        'What is Java',
        'Cloud Computing',
        'مامعني البرمجة بالكائنات',
        'ماهو الذكاء الاصطناعي',
        'ماهي مهارات الفل ستاك',
        'بعض الاخطاء الشائعة في تعلم البرمجة'
    ];
    $key = array_rand($course);
    return [
        'section_id' => $faker->numberBetween('1' , '2'),
        'admins_id'  => \App\Models\Admins::find(1),
        'title'      => $course[$key],
        'slug'       => $faker->slug,
        'content'    => $faker->text('3000'),
    ];
});
