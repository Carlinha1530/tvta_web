<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class CategoriaRequest extends FormRequest
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
            'nome' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required'=>'Preencha o campo nome',
        ];
    }

    protected function validationData()
    {
        $this->merge([
            'id_usuario' => Auth::user()->id,
            'slug' => str_slug($this->nome),
            'nome' => trim($this->nome),
            'descricao' => trim($this->descricao),
            'publicar' => $this->publicar,
        ]);
        return $this->all();
    }
}
