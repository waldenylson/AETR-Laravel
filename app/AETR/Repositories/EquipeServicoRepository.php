<?php namespace App\AETR\Repositories;


use App\AETR\Contracts\EquipeServicoRepository as EquipeServicoRepositoryContract;
use App\Http\Requests\StoreEquipeServicoPostRequest;
use App\Models\EquipeServico;


class EquipeServicoRepository implements EquipeServicoRepositoryContract
{
    private $true  = 1;
    private $false = 0;

    public function getAllRecordsOpen()
    {
        $equipes = EquipeServico::where('finalizado', $this->false)->get();

        return $equipes;
    }

    public function getAllRecords()
    {
        $equipes = EquipeServico::all();

        return $equipes;
    }

    public function updateStatus($id)
    {
        $equipe = EquipeServico::findOrFail($id)->update(['finalizado' => $this->true]);

        return $equipe;
    }

    public function storeEquipeServico(StoreEquipeServicoPostRequest $request)
    {
        $equipe = EquipeServico::create($request->all());

        return $equipe;
    }

    public function editEquipeServico($id)
    {
        $equipe = EquipeServico::findOrFail($id);

        return $equipe;
    }

    public function updateEquipeServico(StoreEquipeServicoPostRequest $request, $id)
    {
        $equipe = EquipeServico::findOrFail($id)->update($request->all());

        return $equipe;
    }

    public function destroyEquipeServico($id)
    {
        $equipe = EquipeServico::findOrFail($id);

        return $equipe->delete();
    }
}