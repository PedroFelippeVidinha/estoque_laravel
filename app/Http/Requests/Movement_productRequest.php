<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Movement_productRequest extends FormRequest
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
            'product_id',
            'movement_id',
            'user_id',
            'quantidade',
            'resp_retirada',
            'local_retirada',
            'localizacao',
            'descricao',
            'observacao',
            'data_entrada',
            'data_retirada',
        ];
    }

    public function messages(){
        return [
            'space_id.required' => 'O campo espaço é requerido',
            'product_id.required' => 'O campo produto é requerido',
            'movement_id.required' => 'O campo movimento é requerido',
            'user_id.required' => 'O campo usuario é requerido',
            'quantidade.required' => 'O campo quantidade é requerido',
            'resp_retirada.required' => 'O campo responsável pela retirada é requerido',
            'local_retirada.required' => 'O campo local da retirada é requerido',
            'localizacao.required' => 'O campo localização do bem é requerido',
            'descricao.required' => 'O campo descrição é requerido',
            'observacao.required' => 'O campo observação é requerido',
            'data_entrada.required' => 'O campo data de entrada é requerido',
            'data_saida.required' => 'O campo data de saída é requerido',
        ];
    }
}
