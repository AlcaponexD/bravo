<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExchangeRate extends FormRequest
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
            'to' => 'required|unique:exchange_rates',
            'from' => 'required|unique:exchange_rates',
            'value' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'to.required' => ':attribute é requerido',
            'from.required' => ':attribute é requerido',
            'value.required' => ':attribute é requerido',
            'from.unique' => ':attribute já existe no banco de dados',
            'to.unique' => ':attribute já existe no banco de dados'
        ];
    }
}
