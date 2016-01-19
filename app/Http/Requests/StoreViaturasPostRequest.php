<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreViaturasPostRequest extends FormRequest {

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
			'marca'      	=> 'required|min:3',
			'modelo'     	=> 'required|min:5',
			'reg_fab'    	=> 'required',
			'placa'      	=> 'required',
			'alocacao'   	=> 'required',
			'disponivel'	=> 'required'
		];
	}

	public function messages()
	{
		return [
			'marca.required'     	=> 'Campo Marca é Obrigatório!',
			'marca.min'          	=> 'O campo Marca deve ter pelo menos :min caracteres!',
			'modelo.required'     	=> 'Campo Modelo é Obrigatório!',
			'modelo.min'          	=> 'O campo Modelo deve ter pelo menos :min caracteres!',
			'reg_fab.required'     	=> 'Campo Registro FAB é Obrigatório!',
			'placa.required'     	=> 'Campo Placa é Obrigatório!',
			'alocacao.required'     => 'Campo Alocação é Obrigatório!',
			'dispovivel.required'	=> 'Campo Disponível é Obrigatório!',
		];
	}

}
