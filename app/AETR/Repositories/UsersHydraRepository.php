<?php namespace App\AETR\Repositories;

use App\Models\UsersHydra;

class UsersHydraRepository
{

    public function getAllUsersFromHydra()
    {
        $usuarios = UsersHydra::where('omi_codigo', 'CINDACTA3')->orderBy('usu_nomeguerra', 'asc')->get();

        return $usuarios;
    }







}