<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Naturezas extends Model {

    protected $table = 'naturezas_missao';

    protected $guarded = ['_token'];

    /**
     *  Relacionamento com a tabela de requisições
     *  @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requisicoes()
    {
        return $this->hasMany(Requisicoes::class, 'natureza_missao_id');
    }

}