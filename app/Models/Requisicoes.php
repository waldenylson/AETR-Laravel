<?php namespace App\Models;

use App\Support\Traits\Eloquent\HasDateFieldsTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Requisicoes extends Model
{
    use HasDateFieldsTrait;

    protected $table = 'requisicoes';

    protected $guarded = ['_token'];


    /**
     *  Relacionamento com a tabela naturezas de missão
     *  @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function natureza()
    {
        return $this->belongsTo(Naturezas::class, 'natureza_missao_id');
    }

    /**
     *  Relacionamento com a tabela de viaturas
     *  @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function viatura()
    {
        return $this->belongsTo(Viaturas::class, 'viatura_id');
    }

    /**
     *  Relacionamento com a tabela de equipe_servico
     *  @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function equipe()
    {
        return $this->belongsTo(EquipeServico::class, 'equipe_servico_id');
    }

    /**
     *  Acessor para transformar a data em um um objeto Carbon válido
     *  para ser salvo no banco de dados com o formato correto
     *  @param $value
     *  @return Carbon object
     */
    public function getDataInicioAttribute($value)
    {
        if(!is_null($value)) return Carbon::parse($this->valueToCarbonObject($value))->format('d/m/Y');
    }

    /**
     *  Acessor para transformar a data em um um objeto Carbon válido
     *  para ser salvo no banco de dados com o formato correto
     *  @param $value
     *  @return Carbon object
     */
    public function getDataChegadaAttribute($value)
    {
        if(!is_null($value)) return Carbon::parse($this->valueToCarbonObject($value))->format('d/m/Y');
    }

    /**
     *  Mutator para salvar o objeto Carbon válido
     *  no banco de dados com o formato correto
     *  @param $value
     *  @return Carbon object
     */
    public function setDataInicioAttribute($value)
    {
        if(!is_null($value)) $this->attributes['data_inicio'] = $this->valueToCarbonObject($value);
    }

    /**
     *  Mutator para salvar o objeto Carbon válido
     *  no banco de dados com o formato correto
     *  @param $value
     *  @return Carbon object
     */
    public function setDataChegadaAttribute($value)
    {
        if(!is_null($value)) $this->attributes['data_chegada'] = $this->valueToCarbonObject($value);
    }
}
