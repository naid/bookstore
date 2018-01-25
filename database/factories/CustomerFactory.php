<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {

    return [
        'bank_account_number' => $faker->regexify('([0-9]){12}'),
    ];
});
