<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
$factory->define(\App\Models\Courses::class, function (Faker $faker) {
    $course = ['Basic UI & UX Design for new development' , 'Digital Art & 3D Model – a future for film company
' , 'Conscious Discipline Summer Institute
' , 'Next-Gen Higher Education Students Have Arrived?
' , 'Digital Education Market Briefing: Minnesota 2015
' , 'Learning Network Webinars for Music Teachers
'];
    $key = array_rand($course);
    return [
        'admins_id'         => \App\Models\Admins::find(1),
        'title'             => $course[$key],
        'speaker_id'        => \App\Models\Speakers::find(1),
        'details'           => $faker->text('200'),
        'slug'              => $faker->slug,
        'sex'               => $faker->numberBetween('0', '2'),
        'levels'            => $faker->numberBetween('1' , '3'),
        'course_date'       => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
        'start_time'        => $faker->time('H:i:s' , 'NOW'),
        'end_time'          => $faker->time('H:i:s' , 'NOW'),
        'online'            => $faker->numberBetween('0' , 1),
        'type_courses_id'   => \App\Models\Type_courses::find(1),
        'collage_id'        => \App\Models\Collages::find(1),
        'status'            => $faker->numberBetween('0' , '1'),
        'certificate'       => $faker->numberBetween('0', '1'),
        'auto_registration' => $faker->numberBetween('0', '1'),
        'maximum_attend'    => $faker->numberBetween('1' , '200'),
        'live_url'          => $faker->url,
    ];
});
