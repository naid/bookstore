<?php

use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {

    return [
        'book_repository_id' => rand(1, 20),
    ];
});
