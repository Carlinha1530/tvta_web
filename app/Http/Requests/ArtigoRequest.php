<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class ArtigoRequest extends FormRequest
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
            'autor' => 'required',
            // 'imagem' => 'required' //Remover aqui caso dê problema
            // 'imagem' => 'required|mimes:jpg,bmp,png'
        ];
    }

    public function messages()
    {
        return [
            'nome.required'=>'Preencha o campo nome',
            'autor.required'=>'Preencha o campo Autor',
            // 'imagem.required'=>'Você precisa escolher uma imagem',
            // 'imagem.mimes'=>'A imagem deve ser em um dos formatos: jpeg, bmp ou png',
        ];
    }

    protected function validationData()
    {
        $this->merge([
            'id_usuario' => Auth::user()->id,
            'slug' => str_slug($this->nome),
            'nome' => trim($this->nome),
            'conteudo' => trim($this->conteudo),
            'resumo' => trim($this->resumo),
            'publicar' => $this->publicar,
            'autor' => trim($this->autor),
        ]);
        return $this->all();
    }
}

// $artigos->id_usuario = $dados['id_usuario'];
// $artigos->nome = trim($dados['nome']);
// $artigos->conteudo = trim($dados['conteudo']);
// $artigos->resumo = trim($dados['resumo']);
// $artigos->publicar= $dados['publicar'];
// $artigos->autor = trim($dados['autor']);