<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExchangeRateUpdate extends FormRequest
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
            'to' => 'unique:exchange_rates',
            'from' => 'unique:exchange_rates',
            'value' => 'nullable'
        ];
    }
    public function messages()
    {
        return [
            'from.unique' => ':attribute já existe no banco de dados',
            'to.unique' => ':attribute já existe no banco de dados'
        ];
    }
}
