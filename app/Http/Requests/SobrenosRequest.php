<?php

namespace App\Http\Requests;
use Auth;

use Illuminate\Foundation\Http\FormRequest;

class SobrenosRequest extends FormRequest
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
            'link_video' => trim($this->link_video),
            'descricao_sobrenos' => trim($this->descricao_sobrenos),
            'descricao_oportunidades' => trim($this->descricao_oportunidades),
            'publicar' => $this->publicar,
        ]);
        return $this->all();
    }
}
