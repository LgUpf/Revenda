<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RevendaRequest extends FormRequest
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
           'nome' =>'required|min:5',
           'telefone' =>'required',
           'dt_fundada' =>'date',
           'endereco' => 'required|min:5',
        ];
    }
}
