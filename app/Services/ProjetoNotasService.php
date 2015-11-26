<?php

namespace SelfProjeto\Services;


use Prettus\Validator\Exceptions\ValidatorException;
use SelfProjeto\Repositories\ProjetoNotasRepository;
use SelfProjeto\Validators\ProjetoNotasValidator;

class ProjetoNotasService
{
    /**
     * @var ProjetoNotasRepository
     */
    protected $repository;

    /**
     * @var ProjetoNotasValidator
     */
    protected $validator;

    public function __construct(ProjetoNotasRepository $repository, ProjetoNotasValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function create(array $data)
    {
        try{
            $this->validator->with($data)->passesOrFail();
            return $this->repository->create($data);
        }catch (ValidatorException $e){
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }

    public function update(array $data, $id)
    {
        try{
            $this->validator->with($data)->passesOrFail();
            return $this->repository->update($data, $id);
        }catch (ValidatorException $e){
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }

}