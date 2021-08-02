<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        //
        'nombre' => $faker->name,
        'apellido' => $faker->lastName,
        'dni' => $faker->numerify('########'),
        'edad' => $faker->numberBetween(18, 80),
        'direccion' => $faker->streetAddress,
        'telefono' => $faker->phoneNumber,
        'estado' => $faker->boolean,
    ];
});
