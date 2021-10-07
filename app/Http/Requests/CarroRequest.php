<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarroRequest extends FormRequest
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
           'modelo' =>'required',
           'marca_id' =>'required',
           'ano' =>'date',
           'km' =>'required',
           'cambio' => 'required',
           'carroceria' =>'required',
           'cor' =>'required',
           'itens' =>'required',
        ];
    }
}
