<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\SelfProjeto\Entities\User::class)->create([
            'name' => 'Fred',
            'email' => 'fredlimonge@gmail.com',
            'password' => bcrypt(123456),
            'remember_token' => str_random(10),
        ]);

        factory(\SelfProjeto\Entities\User::class, 10)->create();
    }
}
