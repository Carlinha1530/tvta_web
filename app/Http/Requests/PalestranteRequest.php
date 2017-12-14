<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class PalestranteRequest extends FormRequest
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
            // 'imagem' => 'required' //Remover aqui caso dê problema
        ];
    }

    public function messages()
    {
        return [
            'nome.required'=>'Preencha o campo nome',
            // 'imagem.required'=>'Você precisa escolher uma imagem',
        ];
    }

    protected function validationData()
    {
        $this->merge([
            'id_usuario' => Auth::user()->id,
            'slug' => str_slug($this->nome),
            'nome' => trim($this->nome),
            'profissao' => trim($this->profissao),
            'descricao' => trim($this->descricao),
            'resumo' => trim($this->resumo),
            'publicar' => $this->publicar,
            'tipo' => $this->tipo,
        ]);
        return $this->all();
    }

}

// $palestrantes->id_usuario = $dados['id_usuario'];
// $palestrantes->nome = trim($dados['nome']);
// $palestrantes->profissao = trim($dados['profissao']);
// $palestrantes->descricao = trim($dados['descricao']);
// $palestrantes->resumo = trim($dados['resumo']);
// $palestrantes->publicar= $dados['publicar'];