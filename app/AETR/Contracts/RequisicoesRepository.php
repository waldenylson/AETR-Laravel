<?php namespace App\AETR\Contracts;


use App\Http\Requests\StoreRequisicoesPostRequest;

interface RequisicoesRepository
{
    public function getAllRecords();
    public function getAllRecordsWithRelacionamentos();
    public function getRequisicaoWithRelacionamentos($id);

    public function getUltimoOdometroViatura($viatura_id);
    public function storeRequisicao(StoreRequisicoesPostRequest $request);
    public function editRequisicao($id);
    public function updateRequisicao(StoreRequisicoesPostRequest $request, $id);
    public function destroyRequisicao($id);
    public function updateStatus($id);
}