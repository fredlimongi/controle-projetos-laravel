<?php

use Illuminate\Database\Seeder;

class ProjetoNotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\SelfProjeto\Entities\ProjetoNotas::class, 50)->create();
    }
}
