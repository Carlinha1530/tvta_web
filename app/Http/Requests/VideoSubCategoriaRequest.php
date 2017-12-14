<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoSubCategoriaRequest extends FormRequest
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
            'subcategoria_id' => 'numeric',
        ];
    }

    public function messages()
    {
        return [
            'subcategoria_id.numeric'=>'Escolha uma sub-categoria para este vídeo',
        ];
    }
}
