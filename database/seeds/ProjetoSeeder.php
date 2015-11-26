<?php

use Illuminate\Database\Seeder;

class ProjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\SelfProjeto\Entities\Projeto::truncate();
        factory(\SelfProjeto\Entities\Projeto::class, 10)->create();
    }
}
