<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class VideoRequest extends FormRequest
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
            'id_palestrante' => 'numeric',
            'id_serie' => 'numeric',
            'link_original' => 'required',
            // 'imagem' => 'required', //Remover aqui caso dê problema
        ];
    }

    public function messages()
    {
        return [
            'nome.required'=>'Preencha o campo nome',
            'id_palestrante.numeric'=>'Escolha um palestrante',
            'id_serie.numeric'=>'Escolha uma Série',
            'link_original.required'=>'Preencha o campo Link',
            // 'imagem.required'=>'Escolha uma imagem',
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
            'link_video' => trim($this->link_video),
            'id_palestrante' => $this->id_palestrante,
            'id_serie' => $this->id_serie,
            'doacao' => $this->doacao,
            'publicar' => $this->publicar,
            'idioma' => $this->idioma,
            'updated_at' => $this->updated_at,
        ]);
        return $this->all();
    }
}


// $videos->id_usuario = $dados['id_usuario'];
// $videos->nome = trim($dados['nome']);
// $videos->descricao = trim($dados['descricao']);
// $videos->link_video = trim($dados['link_video']);
// $videos->doacao = $dados['doacao'];
// $videos->id_palestrante= $dados['id_palestrante'];
// $videos->resumo = trim($dados['resumo']);
// $videos->publicar= $dados['publicar'];