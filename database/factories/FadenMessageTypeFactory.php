<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faden\FadenMessageModule\FadenMessageType;
use Faker\Generator as Faker;

$factory->define(FadenMessageType::class, function (Faker $faker) {
    return [
        'key' => 'email',
        'title' => $faker->sentence(),
    ];
});
