<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class GaleriaRequest extends FormRequest
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
            // 'img' => 'required' //Remover aqui caso dê problema
        ];
    }

    public function messages()
    {
        return [
            'nome.required'=>'Preencha o campo nome',
            // 'img.required'=>'Você precisa escolher uma imagem',
        ];
    }

    protected function validationData()
    {
        $this->merge([
            'id_usuario' => Auth::user()->id,
            'nome' => trim($this->nome),
            'slug' => str_slug($this->nome),
            'descricao' => trim($this->descricao),
            'resumo' => trim($this->resumo),
            'publicar' => $this->publicar,
        ]);
        return $this->all();
    }
}

// $galerias->id_usuario = $dados['id_usuario'];
// $galerias->nome = trim($dados['nome']);
// $galerias->descricao = trim($dados['descricao']);
// $galerias->resumo = trim($dados['resumo']);
// $galerias->publicar= $dados['publicar'];