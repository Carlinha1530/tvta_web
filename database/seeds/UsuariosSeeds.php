<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuariosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(User::where('email','=','carlinha1530@hotmail.com')->count()){
            $usuario = User::where('email','=','carlinha1530@hotmail.com')->first();
            $usuario->name = "Ana Carla Moraes";
            $usuario->email = "carlinha1530@hotmail.com";
            $usuario->password = bcrypt("123456");
            $usuario->remember_token = "a1C5m7N90M";
            $usuario->profissao = "Developer Web";
            $usuario->descricao = "Desenvolvedora Web de Sistemas Para Internet.";
            $usuario->imagem = "img/index-2_img01.jpg";
            $usuario->publicar = "nao";
            $usuario->save();
        }else{
            $usuario = new User();
            $usuario->name = "Ana Carla Moraes";
            $usuario->email = "carlinha1530@hotmail.com";
            $usuario->password = bcrypt("123456");
            $usuario->remember_token = "a1C5m7N90M";
            $usuario->profissao = "Developer Web";
            $usuario->descricao = "Desenvolvedora Web de Sistemas Para Internet.";
            $usuario->imagem = "img/index-2_img01.jpg";
            $usuario->publicar = "nao";
            $usuario->save();
        }

        // $usuario = new User();
        // $usuario->name = "Ana Carla Moraes";
        // $usuario->email = "carlinha1530@hotmail.com";
        // $usuario->password = bcrypt("123");
        // $usuario->remember_token = "a1C5m7N90M";
        // $usuario->profissao = "Developer Web";
        // $usuario->descricao = "Desenvolvedora Web de Sistemas Para Internet.";
        // $usuario->imagem = "img/index-2_img01.jpg";
        // $usuario->publicar = "nao";
        // $usuario->save();

        // factory(\App\User::class, 2)->create();
        // echo "Users criados com sucesso!";
    }
}
