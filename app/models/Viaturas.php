<?php namespace App\Models;
   
use Illuminate\Database\Eloquent\Model;

class Viaturas extends Model {

    protected $table = 'viaturas';

    protected $guarded = ['_token'];

    public function requisicoes()
    {
        return $this->hasMany(Requisicoes::class, 'viatura_id');
    }
}