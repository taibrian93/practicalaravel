<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'idAuthor' => $faker->numberBetween(1, 50),
        'titulo' => $faker->sentence(8,true),
        'annoPublicacion' => $faker->year(),
        'ubicacionLibrero' => $faker->text(100),
        'descripcion' => $faker->paragraph,
        'numeroCopia' => $faker->numberBetween(1, 500),
        'estado' => $faker->boolean,
    ];
});
