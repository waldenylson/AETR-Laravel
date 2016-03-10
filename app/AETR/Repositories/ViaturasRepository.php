<?php namespace App\AETR\Repositories;

use App\AETR\Repositories\Contracts\IViaturasRepository;
use App\Http\Requests\StoreViaturasPostRequest;
use App\Models\Viaturas;


class ViaturasRepository implements IViaturasRepository
{
    public function getAllViaturas()
    {
        $viaturas = Viaturas::all();

        return $viaturas;
    }

    public function storeViatura(StoreViaturasPostRequest $request)
    {
        $viatura = Viaturas::create($request->all());

        return $viatura;
    }

    public function editViatura($id)
    {
        $viatura = Viaturas::findOrFail($id);

        return $viatura;
    }

    public function updateViatura(StoreViaturasPostRequest $request, $id)
    {
        $viatura = Viaturas::findOrFail($id)->update($request->all());

        return $viatura;
    }

    public function destroyViatura($id)
    {
        $viatura = Viaturas::findOrFail($id);

        return $viatura->delete();
    }

}