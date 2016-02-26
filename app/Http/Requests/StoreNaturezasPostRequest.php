<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreNaturezasPostRequest extends Request
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
            'titulo' => 'required',
            'descricao' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'Campo Título deve ser Preenchido!',
            'descricao.required' => 'Campo Descrição deve ser Preenchido!'
        ];
    }
}
