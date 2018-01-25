<?php

use Faker\Generator as Faker;

$factory->define(App\BookRepository::class, function (Faker $faker) {
    $name = $faker->company;
    $len = (strlen($name)<63) ? strlen($name) : 63;

    return [
        'name' => ucwords(substr($name, 0, $len)),
    ];
});
