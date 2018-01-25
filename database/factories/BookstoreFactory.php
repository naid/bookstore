<?php

use Faker\Generator as Faker;

$factory->define(App\Bookstore::class, function (Faker $faker) {
    $name = $faker->name;
    $len = (strlen($name)<63) ? strlen($name) : 63;

    return [
        'owner_name' => ucwords(substr($name, 0, $len)),
    ];
});
