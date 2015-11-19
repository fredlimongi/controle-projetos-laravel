<?php

namespace SelfProjeto\Repositories;


use Prettus\Repository\Eloquent\BaseRepository;
use SelfProjeto\Entities\Cliente;

class ClienteRepositoryEloquent extends BaseRepository implements ClienteRepository
{
    public function model()
    {
        return Cliente::class;
    }

}