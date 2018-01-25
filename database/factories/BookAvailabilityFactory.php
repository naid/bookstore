<?php

$factory->define(App\BookAvailability::class, function () {

    return [
        'book_id' => rand(1, 50),
        'book_repository_id' => rand(1, 20),
    ];
});


