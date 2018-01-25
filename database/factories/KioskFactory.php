<?php

use Faker\Generator as Faker;

$factory->define(App\Kiosk::class, function (Faker $faker) {
    $news = [
        'Herald',
        'Tribune',
        'Times',
        'Post',
        'Daily',
        'Weekly',
    ];
    $name = 'The ' . $faker->city . ' ' . $news[rand(0,5)];
    $len = (strlen($name)<63) ? strlen($name) : 63;

    return [
        'main_newspaper' => ucwords(substr($name, 0, $len)),
    ];
});
