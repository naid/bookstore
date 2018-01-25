<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) 
{
    $title = $faker->sentence(5);
    $titleLen = (strlen($title)<63) ? strlen($title) : 63;

    return [
        'title' => ucwords(substr($title, 0, $titleLen)),
        'book_number' => str_random(10),
    ];
});
