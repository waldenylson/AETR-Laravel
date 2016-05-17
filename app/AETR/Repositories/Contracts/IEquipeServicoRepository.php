<?php namespace App\AETR\Repositories\Contracts;

use App\Http\Requests\StoreEquipeServicoPostRequest;

interface IEquipeServicoRepository
{
    public function getAllRecords();
    public function storeEquipeServico(StoreEquipeServicoPostRequest $request);
    public function editEquipeServico($id);
    public function updateEquipeServico(StoreEquipeServicoPostRequest $request, $id);
    public function destroyEquipeServico($id);
}