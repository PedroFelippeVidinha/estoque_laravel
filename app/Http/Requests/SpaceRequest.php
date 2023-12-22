<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpaceRequest extends FormRequest
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
            'space' => 'string|max:255',
            'complexo' => 'string|max:255',
            'uf' => 'string|max:2'
        ];
    }

    public function messages(){
        return [
            'space.required' => 'O campo Espaço é requerido',
            'complexo.required' => 'O campo Complexo é requerido',
            'uf.required' => 'O campo UF é requerido'
        ];
    }
}
