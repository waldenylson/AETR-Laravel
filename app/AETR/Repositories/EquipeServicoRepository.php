<?php namespace App\AETR\Repositories;


use App\AETR\Repositories\Contracts\IEquipeServicoRepository;
use App\Http\Requests\StoreEquipeServicoPostRequest;
use App\Models\EquipeServico;


class EquipeServicoRepository implements IEquipeServicoRepository
{

    public function getAllRecords()
    {
        $equipes = EquipeServico::all();

        return $equipes;
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