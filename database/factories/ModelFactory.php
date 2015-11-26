<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(SelfProjeto\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(SelfProjeto\Entities\Cliente::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'responsavel' => $faker->name,
        'email' => $faker->email,
        'telefone' => $faker->phoneNumber,
        'endereco' => $faker->address,
        'observacao' => $faker->sentence,
    ];
});

$factory->define(SelfProjeto\Entities\Projeto::class, function (Faker\Generator $faker) {
    return [
        'usuario_id' => rand(1,10),
        'cliente_id' => rand(1,10),
        'nome' => $faker->word,
        'descricao' => $faker->sentence,
        'progresso' => rand(1,100),
        'status' => rand(1,3),
        'data_conclusao' => $faker->dateTime('now')
    ];
});

$factory->define(SelfProjeto\Entities\ProjetoNotas::class, function (Faker\Generator $faker) {
    return [
        'projeto_id' => rand(1,10),
        'titulo' => $faker->sentence,
        'anotacao' => $faker->paragraph,
    ];
});
