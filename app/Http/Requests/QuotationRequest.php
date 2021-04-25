<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class QuotationRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'modelo'  => 'required|string',
			'nombre_completo'  => 'required|string',
			'email'  => 'required|email',
			'numero_celular'  => 'required|numeric|digits_between:7,10',
			'departamento'  => 'required|string',
			'ciudad'  => 'required|string',
        ];
    }
}
