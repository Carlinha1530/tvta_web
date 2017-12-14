<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaginaRequest extends FormRequest
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
            'nome' => 'required|max:255|min:5',
            'descricao' => 'required',
            'texto' => 'required',
            'tipo' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required'=>'Preencha o campo nome',
            'nome.max'=>'O campo nome precisa ter no máximo 255 caracteres',
            'nome.min'=>'O campo nome precisa ter no minimo 5 caracteres',
            'descricao.required'=>'Preencha o campo Descrição',
            'texto.required'=>'Preencha o campo Texto',
            'tipo.required'=>'Preencha o campo tipo',
        ];
    }
}
