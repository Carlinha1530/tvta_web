<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class SubcategoriaRequest extends FormRequest
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
            'id_categoria' => 'numeric',
        ];
    }

    public function messages()
    {
        return [
            'nome.required'=>'Preencha o campo nome',
            'id_categoria.numeric'=>'Escolha uma categoria',
        ];
    }

    protected function validationData()
    {
        $this->merge([
            'id_usuario' => Auth::user()->id,
            'id_categoria' => $this->id_categoria,
            'slug' => str_slug($this->nome),
            'nome' => trim($this->nome),
            'publicar' => $this->publicar,
        ]);
        return $this->all();
    }
}

// $subcategorias->id_usuario = $dados['id_usuario'];
// $subcategorias->id_categoria = $dados['id_categoria'];
// $subcategorias->nome = trim($dados['nome']);
// $subcategorias->publicar= $dados['publicar'];