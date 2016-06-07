<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequisicoesPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'equipe_servico_id' => 'required',
            'natureza_missao_id' => 'required',
            'viatura_id' => 'required',
            'setor' => 'required|min:5',
            'ramal' => 'required|min:5',
            'apresentar_se' => 'required|min:5',
            'data_inicio' => 'required|valid_date_format',
            'hora__inicio' => 'required',
            'data_chegada' => 'required|valid_date_format',
            'hora__chegada' => 'required',
            'destino' => 'required|min:5',
            'observacoes' => 'required|min:5',
            'odometro_saida' => 'required|',
            'odometro_chegada' => 'required|min:5',
            '' => 'required|min:5',
            '' => 'required|min:5',
            '' => 'required|min:5',
            '' => 'required|min:5',
            '' => 'required|min:5',
            '' => 'required|min:5',
            '' => 'required|min:5',
            '' => 'required|min:5',
            '' => 'required|min:5',
            '' => 'required|min:5',
        ];
    }

    public function messages()
    {
        return [
            'despachante.required'     	=> 'Campo Nome é Obrigatório!',
            'despachante.min'          	=> 'O campo Nome deve ter pelo menos :min caracteres!',
            'motorista1.required'     	=> 'Campo Motorista I é Obrigatório!',
            'motorista1.min'          	=> 'O campo Motorista I deve ter pelo menos :min caracteres!',
            'motorista2.required'     	=> 'Campo Motorista II é Obrigatório!',
            'motorista2.min'          	=> 'O campo Motorista II deve ter pelo menos :min caracteres!',
        ];
    }
}
