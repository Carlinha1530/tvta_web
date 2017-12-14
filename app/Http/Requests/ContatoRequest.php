<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class ContatoRequest extends FormRequest
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
            'endereco' => 'required',
            'cidade' => 'required',
            'fone1' => 'required',
            'email' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'endereco.required'=>'Preencha o campo Endereço',
            'cidade.required'=>'Preencha o campo Cidade',
            'fone1.required'=>'Preencha o campo Telefone 1',
            'email.required'=>'Preencha o campo Email',
            // 'imagem.required'=>'Você precisa escolher uma imagem',
            // 'imagem.mimes'=>'A imagem deve ser em um dos formatos: jpeg, bmp ou png',
        ];
    }

    protected function validationData()
    {
        $this->merge([
            'id_usuario' => Auth::user()->id,
            'mapa' => trim($this->mapa),
            'endereco' => trim($this->endereco),
            'cidade' => trim($this->cidade),
            'fone1' => trim($this->fone1),
            'fone2' => trim($this->fone2),
            'celular' => trim($this->celular),
            'email' => trim($this->email),
            'publicar' => $this->publicar,
        ]);
        return $this->all();
    }
}
