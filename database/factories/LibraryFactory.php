<?php

use Faker\Generator as Faker;

$factory->define(App\Library::class, function (Faker $faker) {
    $name = $faker->city;
    $len = (strlen($name)<63) ? strlen($name) : 63;

    return [
        'neighborhood' => ucwords(substr($name, 0, $len)),
    ];
});
