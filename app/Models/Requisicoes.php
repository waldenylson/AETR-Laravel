<?php namespace App\Models;

use App\Support\Traits\Eloquent\HasDateFieldsTrait;
use Illuminate\Database\Eloquent\Model;

class Requisicoes extends Model
{
    use HasDateFieldsTrait;

    protected $guarded = ['_token'];


    public function getDataInicioAttribute($value)
    {
        return Carbon::parse($this->valueToCarbonObject($value))->format('d/m/Y');
    }

    public function getDataChegadaAttribute($value)
    {
        return Carbon::parse($this->valueToCarbonObject($value))->format('d/m/Y');
    }

    public function setDataInicioAttribute($value)
    {
        $this->attributes['data_inicio'] = $this->valueToCarbonObject($value);
    }

    public function setDataChegadaAttribute($value)
    {
        $this->attributes['data_chegada'] = $this->valueToCarbonObject($value);
    }
}