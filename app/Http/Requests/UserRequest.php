<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'password_confirmation' => 'same:password',
            'imagem' => 'required',
            // 'password' => 'required|min:6|confirmed',
            // 'imagem' => 'required|dimensions:width=266,height=218', //Remover aqui caso dê problema
            // 'required|dimensions:width=1000,height=200',
            // 'required|dimensions:min_width=1000, max_width=1000, min_height=200, max_height=200',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Preencha o campo nome',
            'name.max'=>'Preencha um nome com no máximo 255 caracteres',
            
            'email.required' => 'Preencha o campo e-mail',
            'email.email' => 'Preencha um e-mail válido',
            'email.unique' => 'O E-mail escolhido já está cadastrado no sistema, escolha outro e-mail',
            'email.max'=>'Preencha um E-mail com no máximo 255 caracteres',

            'password.required'=>'Você precisa definir uma senha',
            'password.min'=>'A senha deve ter no minimo 6 digitos',
            
            'password_confirmation.same'=>'Erro na confirmação de senha. As senhas não conferem!',

            'imagem.required'=>'Você precisa escolher uma imagem',
            // 'imagem.dimensions'=>'Você precisa escolher uma imagem com tamanho 266 x 218',
        ];
    }
}
