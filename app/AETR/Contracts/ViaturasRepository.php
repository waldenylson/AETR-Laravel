<?php namespace App\AETR\Contracts;

use App\Http\Requests\StoreViaturasPostRequest;

interface ViaturasRepository
{
    public function getAllViaturas();
    public function getAllViaturasForSelect();
    public function storeViatura(StoreViaturasPostRequest $request);
    public function editViatura($id);
    public function updateViatura(StoreViaturasPostRequest $request, $id);
    public function destroyViatura($id);
}