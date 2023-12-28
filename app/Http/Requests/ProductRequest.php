<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'space_id',
            'category_id',
            'name',
            'tipo',
            'marca',
            'tamanho',
            'condicao',
            'fornecedor',
            'descricao',
            'foto',
            'patrimonio',
            'numero_patrimonial',
            'numero_controle',
            'observacao',
        ];
    }

    public function messages(){
        return [
            'space_id.required' => 'O campo espaço é requerido',
            'category_id.required' => 'O campo categoria é requerido',
            'name.required' => 'O campo nomedo produto é requerido',
            'tipo.required' => 'O campo tipo é requerido',
            'marca.required' => 'O campo marca é requerido',
            'tamanho.required' => 'O campo tamanho é requerido',
            'condicao.required' => 'O campo condição é requerido',
            'fornecedor.required' => 'O campo fornecedor é requerido',
            'descricao.required' => 'O campo descrição é requerido',
            'foto.required' => 'O campo foto é requerido',
            'patrimonio.required' => 'O campo número de patrimônio é requerido',
            'numero_controle.required' => 'O campo número de controle é requerido',
            'observacao.required' => 'O campo observação é requerido',
        ];
    }
}
