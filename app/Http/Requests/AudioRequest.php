<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class AudioRequest extends FormRequest
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
            // 'audio' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required'=>'Preencha o campo nome',
            // 'audio.required'=>'Você precisa escolher uma audio',
        ];
    }

    protected function validationData()
    {
        $this->merge([
            'id_usuario' => Auth::user()->id,
            'nome' => trim($this->nome),
            'slug' => str_slug($this->nome),
            'descricao' => trim($this->descricao),
            'publicar' => $this->publicar,
        ]);
        return $this->all();
    }
}

// $audios->id_usuario = $dados['id_usuario'];
// $audios->nome = trim($dados['nome']);
// $audios->descricao = trim($dados['descricao']);
// $audios->publicar= $dados['publicar'];