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
<<<<<<< HEAD
            'equipe_servico_id'         =>  'required',
            'natureza_missao_id'        =>  'required',
            'viatura_id'                =>  'required',
            'setor'                     =>  'required|min:5',
            'ramal'                     =>  'required|min:5',
            'apresentar_se'             =>  'required|min:5',
            'data_inicio'               =>  'required|valid_date_format',
            'hora__inicio'              =>  'required',
            'data_chegada'              =>  'required|valid_date_format',
            'hora__chegada'             =>  'required',
            'destino'                   =>  'required|min:5',
            'observacoes'               =>  'required|min:5',
            'odometro_saida'            =>  'required|',
            'odometro_chegada'          =>  'required|min:5',
=======
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
>>>>>>> origin/master
        ];
    }

    public function messages()
    {
        return [
            'equipe_servico_id.required'    =>  'Equipe de Serviço é Obrigatório!',
            'natureza_missao_id.required'   =>  'Natureza de Missão é Obrigatório!',
            'viatura_id.required'          	=>  'Viatura é Obrigatório!',
            'setor.required'     	        =>  'Setor é Obrigatório!',
            'ramal.required'          	    =>  'Ramal é Obrigatório!',
            'apresentar_se.required'     	    =>  'Mais Antigo a Apresentar-se é Obrigatório!',
            'data_inicio.required'          	=>  'Data de Início é Obrigatório!',
            'data_inicio.valid_date_format'     => 'Formato de data inválido',
            'hora_inicio.required'              => 'Hora de início é Obrigatório',
            'destino.required'                  => 'Destino é Obrigatório!',
        ];
    }
}
