<?php

namespace SelfProjeto\Validators;


use Prettus\Validator\LaravelValidator;

class ProjetoValidator extends LaravelValidator
{
    protected $rules = [
        'usuario_id' => 'required|integer',
        'cliente_id' => 'required|integer',
        'nome' => 'required',
        'status' => 'required',
        'progresso' => 'required',
        'data_conclusao' => 'required'
    ];
}