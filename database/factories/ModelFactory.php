<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create Models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Viaturas::class, function (Faker\Generator $faker) {
    return [
        'marca' => $faker->word,
        'modelo' => $faker->word,
        'reg_fab' => $faker->word,
        'placa' => $faker->word,
        'alocacao' => $faker->word,
        'reservada' => $faker->word,

        'disponivel' => $faker->boolean(),
    ];
});

$factory->define(App\Models\Naturezas::class, function (Faker\Generator $faker) {
    return [
        'titulo' => $faker->word,
        'descricao' => $faker->text(),
    ];
});