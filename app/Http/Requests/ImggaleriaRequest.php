<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImggaleriaRequest extends FormRequest
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
            'img_large' => 'required' //Remover aqui caso dê problema
        ];
    }

    public function messages()
    {
        return [
            'img_large.required'=>'Você precisa escolher uma imagem',
        ];
    }
}
