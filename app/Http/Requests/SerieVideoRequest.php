<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SerieVideoRequest extends FormRequest
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
            'video_id' => 'numeric',
        ];
    }

    public function messages()
    {
        return [
            'video_id.numeric'=>'Escolha um vídeo para inserir',
        ];
    }
}
