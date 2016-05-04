<?php namespace App\AETR\Repositories\Contracts;

use App\Http\Requests\StoreViaturasPostRequest;

interface IViaturasRepository
{
    public function getAllViaturas();

    public function getAllViaturasForSelect();
    public function storeViatura(StoreViaturasPostRequest $request);
    public function editViatura($id);
    public function updateViatura(StoreViaturasPostRequest $request, $id);
    public function destroyViatura($id);
}