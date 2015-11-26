<?php

namespace SelfProjeto\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Projeto extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'usuario_id',
        'cliente_id',
        'nome',
        'descricao',
        'progresso',
        'status',
        'data_conclusao'
    ];

    public function notas(){
        return $this->hasMany(ProjetoNotas::class);
    }

}
