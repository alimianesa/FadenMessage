<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FadenMessage;
use Faker\Generator as Faker;

$factory->define(FadenMessage::class, function (Faker $faker) {
    return [
        'message_type'=>$faker->randomNumber(2,2),
        'to' => $faker->email,
        'title'=>$faker->sentence,
        'body'=>$faker->text,
    ];
});
