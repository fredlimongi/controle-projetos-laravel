<?php

namespace SelfProjeto\Validators;


use Prettus\Validator\LaravelValidator;

class ProjetoNotasValidator extends LaravelValidator
{
    protected $rules = [
        'projeto_id' => 'required|integer',
        'titulo' => 'required',
        'anotacao' => 'required',
    ];
}