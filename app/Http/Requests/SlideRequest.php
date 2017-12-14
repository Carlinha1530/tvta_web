<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlideRequest extends FormRequest
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
            'imagem' => 'required|mimes:jpeg,bmp,png', //Remover aqui caso dê problema
        ];
    }

    public function messages()
    {
        return [
            'imagem.required'=>'Você precisa escolher no minímo uma imagem',
            'imagem.mimes'=>'Você precisa escolher a imagem em um dos formatos (jpeg, bmp ou png)',
        ];
    }
}
