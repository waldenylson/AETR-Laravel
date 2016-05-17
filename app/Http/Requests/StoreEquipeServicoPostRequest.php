<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreEquipeServicoPostRequest extends Request
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
            'despachante' => 'required|min:5',
            'motorista1'  => 'required|min:5',
            'motorista2'  => 'required|min:5',
            'motorista2'  => 'required|min:5',
            'data'        => 'required|min:5',
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
