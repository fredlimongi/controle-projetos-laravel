<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsuarioSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(ProjetoSeeder::class);
        $this->call(ProjetoNotasSeeder::class);

        Model::reguard();
    }
}
