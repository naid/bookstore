<?php

use Faker\Generator as Faker;

$factory->define(App\BookTransaction::class, function (Faker $faker) {

    return [
        //'book_id' => rand(1, 50),
        //'book_repository_id' => rand(1, 20),
        //'customer_id' => rand(1, 10),
        //'employee_id' => rand(1, 10),
    ];
});
