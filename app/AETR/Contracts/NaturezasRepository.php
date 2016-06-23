<?php namespace App\AETR\Contracts;

use App\Http\Requests\StoreNaturezasPostRequest;

interface NaturezasRepository
{
    public function getAllNaturezas();
    public function getAllNaturezasForSelect();
    public function storeNatureza(StoreNaturezasPostRequest $request);
    public function editNatureza($id);
    public function updateNatureza(StoreNaturezasPostRequest $request, $id);
    public function destroyNatureza($id);

}