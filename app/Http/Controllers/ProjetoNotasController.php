<?php

namespace SelfProjeto\Http\Controllers;

use Illuminate\Http\Request;

use SelfProjeto\Entities\Projeto;
use SelfProjeto\Http\Requests;
use SelfProjeto\Repositories\ProjetoNotasRepository;
use SelfProjeto\Services\ProjetoNotasService;

class ProjetoNotasController extends Controller
{
    /**
     * @var ProjetoNotasRepository
     */
    private $repository;

    /**
     * @var ProjetoNotasService
     */
    private $service;

    public function __construct( ProjetoNotasRepository $repository, ProjetoNotasService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return $this->repository->findWhere(['projeto_id' => $id]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $notaId)
    {
        return $this->repository->find($notaId);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $notaId)
    {
        return $this->service->update($request->all(), $notaId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $notaId)
    {
        return $this->repository->find($notaId)->delete();
    }
}
