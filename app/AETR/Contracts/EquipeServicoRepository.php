<?php namespace App\AETR\Contracts;

use App\Http\Requests\StoreEquipeServicoPostRequest;

interface EquipeServicoRepository
{
    public function getAllRecords();
    public function getAllRecordsOpen();
    public function getOneRecordOnly($id);
    public function storeEquipeServico(StoreEquipeServicoPostRequest $request);
    public function editEquipeServico($id);
    public function updateEquipeServico(StoreEquipeServicoPostRequest $request, $id);
    public function destroyEquipeServico($id);
    public function updateStatus($id);
}