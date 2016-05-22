<?php namespace App\AETR\Repositories;

use App\AETR\Contracts\NaturezasRepository as NaturezasRepositoryContract;
use App\Http\Requests\StoreNaturezasPostRequest;
use App\Models\Naturezas;

class NaturezasRepository implements NaturezasRepositoryContract
{
    public function getAllNaturezas()
    {
        $naturezas = Naturezas::all();

        return $naturezas;
    }

    public function getAllNaturezasForSelect()
    {
        $baseArray = Naturezas::all();

        $naturezas = array();

        foreach($baseArray as $value)
        {
            $naturezas[$value->id] = $value->titulo;
        }

        return $naturezas;
    }

    public function storeNatureza(StoreNaturezasPostRequest $request)
    {
        $natureza = Naturezas::create($request->all());

        return $natureza;
    }

    public function editNatureza($id)
    {
        $natureza = Naturezas::findOrFail($id);

        return $natureza;
    }

    public function updateNatureza(StoreNaturezasPostRequest $request, $id)
    {
        $natureza = Naturezas::findOrFail($id)->update($request->all());

        return $natureza;
    }

    public function destroyNatureza($id)
    {
        $natureza = Naturezas::findOrFail($id);

        return $natureza->delete();
    }


}