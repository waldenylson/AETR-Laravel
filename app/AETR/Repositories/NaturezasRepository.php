<?php namespace App\AETR\Repositories;

use App\Http\Requests\StoreNaturezasPostRequest;
use App\Models\Naturezas;

class NaturezasRepository
{
    public function getAllNaturezas()
    {
        $naturezas = Naturezas::all();

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