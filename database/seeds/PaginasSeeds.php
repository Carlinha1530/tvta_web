<?php

use Illuminate\Database\Seeder;
use App\Pagina;

class PaginasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Sobre Nós - Nossa Historia*/
        $existe = Pagina::where('tipo','=','nossa_historia')->count();
        if($existe){
        	$paginaNossaHistoria = Pagina::where('tipo','=','nossa_historia')->first();        	
        }else{
        	$paginaNossaHistoria = new Pagina();
        }

        $paginaNossaHistoria->nome = "Sobre Nós";
        $paginaNossaHistoria->descricao = "Descrição breve nossa_historia da empresa.";
        $paginaNossaHistoria->texto = "Texto nossa_historia da empresa.";
        $paginaNossaHistoria->imagem = "img/modelo_img_home.jpg";
        $paginaNossaHistoria->mapa = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.337108202553!2d-47.171124885041884!3d-22.491531785224574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c88af1596bf639%3A0x7788915209d7a923!2sR.+Alameda+Sapucaia%2C+Eng.+Coelho+-+SP%2C+13165-000!5e0!3m2!1spt-BR!2sbr!4v1493231931124" width="530" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>';
        $paginaNossaHistoria->tipo = "nossa_historia";
        $paginaNossaHistoria->save();
        echo "Pagina nossa_historia criada com sucesso!";


        /* Sobre Nós - Contatos */
        $existe = Pagina::where('tipo','=','contato')->count();
        if($existe){
            $paginaContato = Pagina::where('tipo','=','contato')->first();          
        }else{
            $paginaContato = new Pagina();
        }

        $paginaContato->nome = "Entre em contato";
        $paginaContato->descricao = "Preencha o formulário";
        $paginaContato->texto = "Contato";
        $paginaContato->imagem = "img/modelo_img_home.jpg";
        $paginaNossaHistoria->mapa = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.337108202553!2d-47.171124885041884!3d-22.491531785224574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c88af1596bf639%3A0x7788915209d7a923!2sR.+Alameda+Sapucaia%2C+Eng.+Coelho+-+SP%2C+13165-000!5e0!3m2!1spt-BR!2sbr!4v1493231931124" width="530" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>';
        $paginaContato->email = "carlinha1530@hotmail.com";
        $paginaContato->tipo = "contato";
        $paginaContato->save();
        echo "Pagina Contato criada com sucesso!";
        
    }
}
