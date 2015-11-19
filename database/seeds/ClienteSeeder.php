<?php

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \SelfProjeto\Entities\Cliente::truncate();
        factory(\SelfProjeto\Entities\Cliente::class, 10)->create();
    }
}
