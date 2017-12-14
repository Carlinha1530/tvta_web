<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class SerieRequest extends FormRequest
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
            'descricao' => 'required',
            // 'imagem' => 'required' //Remover aqui caso dê problema
        ];
    }

    public function messages()
    {
        return [
            'nome.required'=>'Preencha o campo nome',
            'descricao.required'=>'Preencha o campo Descrição',
            // 'imagem.required'=>'Você precisa escolher uma imagem',
        ];
    }

    protected function validationData()
    {
        $this->merge([
            'id_usuario' => Auth::user()->id,
            'slug' => str_slug($this->nome),
            'nome' => trim($this->nome),
            'descricao' => trim($this->descricao),
            'resumo' => trim($this->resumo),
            'publicar' => $this->publicar,
        ]);
        return $this->all();
    }
}

// $series->id_usuario = $dados['id_usuario'];
// $series->nome = trim($dados['nome']);
// $series->descricao = trim($dados['descricao']);
// $series->resumo = trim($dados['resumo']);
// $series->publicar= $dados['publicar'];