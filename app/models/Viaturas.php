<?php namespace App\Models;
   
use Illuminate\Database\Eloquent\Model;

class Viaturas extends Model {

    protected $guarded = ['_token'];

    public function requisicoes()
    {
        return $this->belongsToMany(Requisicoes::class);
    }

}