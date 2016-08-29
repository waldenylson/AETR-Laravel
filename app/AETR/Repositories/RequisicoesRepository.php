<?php namespace App\AETR\Repositories;

use App\AETR\Contracts\RequisicoesRepository as RequisicoesRepositoryContract;
use App\Http\Requests\StoreRequisicoesPostRequest;
use App\Models\Requisicoes;

class RequisicoesRepository implements RequisicoesRepositoryContract
{
    private $true  = 1;
    private $false = 0;

    public function getAllRecords()
    {
        $requisicoes = Requisicoes::all();

        return $requisicoes;
    }

    public function getAllRecordsWithRelacionamentos($tipo)
    {
        $requisicoes = Requisicoes::where('finalizada', $tipo)->get();

        return $requisicoes->load('viatura', 'natureza');
    }

    public function getRequisicaoWithRelacionamentos($id)
    {
        $requisicao = Requisicoes::findOrFail($id);

        return $requisicao->load('viatura', 'natureza', 'equipe');
    }

    public function getUltimoOdometroViatura($viatura_id)
    {
        $requisicao = Requisicoes::where('viatura_id', $viatura_id)->orderBy('id', 'desc')->first();

        return ($requisicao instanceof Requisicoes) ? $requisicao->odometro_chegada : null;
    }

    public function storeRequisicao(StoreRequisicoesPostRequest $request)
    {
        //dd($request);

        $requisicoes = Requisicoes::create($request->all());

        return $requisicoes;
    }

    public function editRequisicao($id)
    {
        $requisicoes = Requisicoes::findOrFail($id);

        return $requisicoes;
    }

    public function updateRequisicao(StoreRequisicoesPostRequest $request, $id)
    {
        $requisicoes = Requisicoes::findOrFail($id)->update($request->all());

        return $requisicoes;
    }

    public function destroyRequisicao($id)
    {
        $requisicoes = Requisicoes::findOrFail($id);

        return $requisicoes->delete();
    }

    public function updateStatus($id)
    {
        $requisicao = Requisicoes::findOrFail($id)->update(['finalizada' => $this->true]);

        return $requisicao;
    }
}