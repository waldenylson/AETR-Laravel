<?php namespace App\Models;

use App\Support\Traits\Eloquent\HasDateFieldsTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class EquipeServico extends Model {

    use HasDateFieldsTrait;

    protected $table = 'equipe_servico';

    protected $guarded = ['_token'];

    public function requisicoes()
    {
        return $this->hasMany(Requisicoes::class, 'equipe_servico_id');
    }

    public function getDataAttribute($value)
    {
        return Carbon::parse($this->valueToCarbonObject($value))->format('d/m/Y');
    }

    public function setDataAttribute($value)
    {
        $this->attributes['data'] = $this->valueToCarbonObject($value);
    }

}