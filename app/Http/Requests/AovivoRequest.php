<?php

namespace App\Http\Requests;
use Auth;

use Illuminate\Foundation\Http\FormRequest;

class AovivoRequest extends FormRequest
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
            
        ];
    }

    public function messages()
    {
        return [
            
        ];
    }

    protected function validationData()
    {
        $this->merge([
            'id_usuario' => Auth::user()->id,
            'titulo' => trim($this->titulo),
            'descricao' => trim($this->descricao),
            'link_video' => trim($this->link_video),
            'link_videoen' => trim($this->link_videoen),
            'link_videoes' => trim($this->link_videoes),
            'publicar' => $this->publicar,
        ]);
        return $this->all();
    }
}
