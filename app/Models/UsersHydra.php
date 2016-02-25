<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersHydra extends Model {

    protected $table = 'sistema.usuario';

    protected $primaryKey = 'usu_login';

    protected $connection = 'mysql';

}