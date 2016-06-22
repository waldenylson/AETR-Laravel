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
            'equipe_servico_id'         =>  'required',
            'natureza_missao_id'        =>  'required',
            'viatura_id'                =>  'required',
            'requisitante'              =>  'required|min:5',
            'setor'                     =>  'required|min:4',
            'ramal'                     =>  'required',
            'apresentar_se'             =>  'required|min:5',
            'data_inicio'               =>  'required|valid_date_format',
            'hora_inicio'               =>  'required',
            'destino'                   =>  'required|min:5',
            'observacoes'               =>  'min:5',
            'odometro_saida'            =>  'required|',
        ];
    }

    public function messages()
    {
        return [
            'equipe_servico_id.required'        =>  'Equipe de Serviço é Obrigatório!',
            'natureza_missao_id.required'       =>  'Natureza de Missão é Obrigatório!',
            'viatura_id.required'          	    =>  'Viatura é Obrigatório!',
            'requisitante.required'             =>  'Requisitante é Obrigatório!',
            'requisitante.min'                  =>  'Requisitante deve ter pelo menos 5 caracteres!',
            'setor.required'     	            =>  'Setor é Obrigatório!',
            'setor.min'          	            =>  'Setor deve ter pelo menos 5 caracteres!',
            'ramal.required'          	        =>  'Ramal é Obrigatório!',
            'apresentar_se.required'     	    =>  'Mais Antigo a Apresentar-se é Obrigatório!',
            'data_inicio.required'          	=>  'Data de Início é Obrigatório!',
            'data_inicio.valid_date_format'     =>  'Formato de data inválido',
            'hora_inicio.required'              =>  'Hora de início é Obrigatório',
            'destino.required'                  =>  'Destino é Obrigatório!',
            'destino.min'                       =>  'Destino deve ter pelo menos 5 caracteres!',
            'observacoes.min'              =>  'Obsevações deve ter pelo menos 5 caracteres',
            'odometro_saida.required'           =>  'Odômetro de Saída é Obrigatório!'
        ];
    }
}
