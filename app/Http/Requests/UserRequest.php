<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'nullable|string|min:8|confirmed',
            'profile_id' => 'required|exists:profiles,id',
            'space_id' => 'required|exists:spaces,id'
        ];
    }

    public function messages()  {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'last_name.required' => 'O campo sobrenome é obrigatório.',
            'email.unique' => 'Este email já está em uso.',
            'email.required' => 'O campo email é obrigatório.',
            'password.required' => 'O campo senha é obrigatório.',
            'password.min' => 'A senha deve ter pelo menos 8 caracteres.',
            'password.confirmed' => 'As senhas devem ser iguais.',
            'profile_id.required' => 'O campo perfil é obrigatório.',
            'space_id.required' => 'O campo espaço é obrigatório.'
        ];
    }
}
