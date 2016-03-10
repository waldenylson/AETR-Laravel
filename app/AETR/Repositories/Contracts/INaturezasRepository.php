<?php namespace App\AETR\Repositories\Contracts;

use App\Http\Requests\StoreNaturezasPostRequest;

interface INaturezasRepository
{
    public function getAllNaturezas();
    public function storeNatureza(StoreNaturezasPostRequest $request);
    public function editNatureza($id);
    public function updateNatureza(StoreNaturezasPostRequest $request, $id);
    public function destroyNatureza($id);

}