<?php

Auth::routes();

/* HOME SITE */
Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@home']); 


/* BUSCA */
Route::get('/busca',['as'=>'site.busca','uses'=>'Site\BuscaController@index']); 


/* Apps */
Route::get('/apps',['as'=>'site.apps','uses'=>'Site\AppController@Apps']); 


/* Estudos biblicos */
Route::get('/infografico',['as'=>'site.infografico','uses'=>'Site\EstudosBiblicosController@infografico']); 
Route::get('/serie_biblica',['as'=>'site.serie_biblica','uses'=>'Site\EstudosBiblicosController@serie_biblica']); 

Route::get('/info',['as'=>'site.info','uses'=>'Site\EstudosBiblicosController@info']); 
// Route::get('/infograficos/info_2300',['as'=>'site.infograficos.info_2300','uses'=>'Site\EstudosBiblicosController@info_2300']); 


/* Páginas categorias | categoria  */
Route::get('/categorias', ['as'=>'site.categorias_all', 'uses'=>'Site\CategoriaController@categorias_all']);
Route::get('/categoria/{slug}', ['as'=>'site.categoria', 'uses'=>'Site\CategoriaController@categoria']);


/* Páginas subcategorias */
Route::get('/subcategoria/{slug}', ['as'=>'site.subcategoria', 'uses'=>'Site\SubCategoriaController@subcategoria']);


/* Páginas palestrantes | palestrante*/
Route::get('/palestrantes', ['as'=>'site.palestrantes_all', 'uses'=>'Site\PalestranteController@palestrantes_all']);
Route::get('/palestrante/{slug}', ['as'=>'site.palestrante', 'uses'=>'Site\PalestranteController@palestrante']);
Route::get('programas', ['as'=>'site.programas_all', 'uses'=>'Site\PalestranteController@programas_all']);
Route::get('/programa/{slug}', ['as'=>'site.programa', 'uses'=>'Site\PalestranteController@programa']);
Route::get('producoes', ['as'=>'site.producoes_all', 'uses'=>'Site\PalestranteController@producoes_all']);
Route::get('/producao/{slug}', ['as'=>'site.producao', 'uses'=>'Site\PalestranteController@producao']);


/* Páginas vídeos portugues*/
Route::get('/videos_br', ['as'=>'site.videos_br', 'uses'=>'Site\VideoBR@videos_br']); 
Route::get('/video_br/{slug}', ['as'=>'site.video_br', 'uses'=>'Site\VideoBR@video_br']); 

/* Páginas vídeos ingles*/
Route::get('/videos_en', ['as'=>'site.videos_en', 'uses'=>'Site\VideoEN@videos_en']); 
Route::get('/video_en/{slug}', ['as'=>'site.video_en', 'uses'=>'Site\VideoEN@video_en']); 

/* Páginas vídeos espanhol*/
Route::get('/videos_es', ['as'=>'site.videos_es', 'uses'=>'Site\VideoES@videos_es']); 
Route::get('/video_es/{slug}', ['as'=>'site.video_es', 'uses'=>'Site\VideoES@video_es']); 

// Route::get('/videos', ['as'=>'site.videos_all', 'uses'=>'Site\VideoController@videos_all']); 
Route::get('/video/{slug}', ['as'=>'site.video', 'uses'=>'Site\VideoController@video']); 

/* Páginas series | serie */
Route::get('/series', ['as'=>'site.series', 'uses'=>'Site\SerieController@series']); 
Route::get('/serie/{slug}', ['as'=>'site.serie', 'uses'=>'Site\SerieController@serie']); 


/* Páginas artigos | artigo */
Route::get('/artigos', ['as'=>'site.artigos', 'uses'=>'Site\ArtigoController@artigos']);
Route::get('/artigo/{slug}', ['as'=>'site.artigo', 'uses'=>'Site\ArtigoController@artigo']);//nome 

/* Páginas livros | livro */
Route::get('/livros', ['as'=>'site.livros', 'uses'=>'Site\LivroController@livros']);
Route::get('/download_pdf/{file_pdf}', ['as'=>'site.download_L_pdf', 'uses'=>'Site\LivroController@download'])->where('file_pdf', '.+'); 
Route::get('/download_epub/{file_epub}', ['as'=>'site.download_L_epub', 'uses'=>'Site\LivroController@download'])->where('file_epub', '.+'); 


/* Páginas audios | audio */
Route::get('/audios', ['as'=>'site.audios', 'uses'=>'Site\AudioController@audios']);
Route::get('/download/{audio}', ['as'=>'site.download_A', 'uses'=>'Site\AudioController@download'])->where('audio', '.+'); 


/* Download Artigos */
// Route::get('/download', ['as'=>'site.downloadA', 'uses'=>'Site\ArtigoController@download']); 
Route::get('/download/{file}', ['as'=>'site.download', 'uses'=>'Site\ArtigoController@download'])->where('file', '.+'); 


/* Download Artigo Home*/
Route::get('/download/{file}', ['as'=>'site.downloadA_H', 'uses'=>'Site\HomeController@download'])->where('file', '.+'); 


/* Nossa_historia */
Route::get('/nossa_historia', ['as'=>'site.nossa_historia', 'uses'=>'Site\SobrenosController@nossa_historia']);


/* Contatos | contatos/enviar */
Route::get('/contatos', ['as'=>'site.contatos', 'uses'=>'Site\ContatoController@contato']);
Route::post('/contatos/enviar',['as'=>'site.contatos.enviar', 'uses'=>'Site\ContatoController@enviarContato']);


/* Quero Doar | Quero Participar | Quero Divulgar */
Route::get('/quero_doar',['as'=>'quero_doar','uses'=>'Site\DoacaoController@doar']); 
Route::get('/quero_participar',['as'=>'quero_participar','uses'=>'Site\DoacaoController@participar']); 
Route::get('/quero_divulgar',['as'=>'quero_divulgar','uses'=>'Site\DoacaoController@divulgar']); 


/* Download Logos - Quero Divulgar */
Route::get('/logo1', ['as'=>'quero_divulgar.download','uses'=>'Site\DoacaoController@logo1'] );
Route::get('/logo2', ['as'=>'quero_divulgar.download','uses'=>'Site\DoacaoController@logo2'] );
Route::get('/logo3', ['as'=>'quero_divulgar.download','uses'=>'Site\DoacaoController@logo3'] );
Route::get('/logo4', ['as'=>'quero_divulgar.download','uses'=>'Site\DoacaoController@logo4'] );
Route::get('/logo5', ['as'=>'quero_divulgar.download','uses'=>'Site\DoacaoController@logo5'] );


/* Galerias */
Route::get('/galerias_all',['as'=>'galerias_all', 'uses'=>'Site\GaleriaController@indexGalerias']);
Route::get('/galeria/{slug}',['as'=>'galeria', 'uses'=>'Site\GaleriaController@indexGaleria']);


/* Streaming | Rádio | Ao vivo */
Route::get('/streaming',['as'=>'streaming','uses'=>'Site\StreamingController@indexStreaming']); 
Route::get('/radio',['as'=>'radio','uses'=>'Site\StreamingController@indexRadio']); 

Route::get('/aovivo',['as'=>'aovivo','uses'=>'Site\StreamingController@indexAovivo']);

Route::get('/aovivoes',['as'=>'aovivoes','uses'=>'Site\StreamingController@indexAovivoes']);
Route::get('/aovivoen',['as'=>'aovivoen','uses'=>'Site\StreamingController@indexAovivoen']);

Route::get('/download/{audio}', ['as'=>'site.download_A', 'uses'=>'Site\StreamingController@download'])->where('audio', '.+'); 


/* LOGIN */
Route::get('/admin/login',['as'=>'admin.login', function(){
    return view('admin.login.index');
}]);
Route::post('/admin/login',['as'=>'admin.login', 'uses'=>'Admin\UsuarioController@login']);


/* GROUP ACESSO ADMIN */
Route::group(['middleware'=>'auth'], function(){

    Route::group(['prefix' => 'admin'], function () {

        /* LOGOUT */
        Route::get('/login/sair',['as'=>'admin.login.sair', 'uses'=>'Admin\UsuarioController@sair']);

        /* HOME ADMIN */
        Route::get('',['as'=>'admin.principal', function(){
            return view('admin.principal.index');
        }]);

        /* USUÁRIOS */
        Route::group(['prefix' => 'usuarios'], function () {
            Route::get('/',['as'=>'admin.usuarios', 'uses'=>'Admin\UsuarioController@index']);
            Route::get('/adicionar',['as'=>'admin.usuarios.adicionar', 'uses'=>'Admin\UsuarioController@adicionar']);
            Route::post('/salvar',['as'=>'admin.usuarios.salvar', 'uses'=>'Admin\UsuarioController@salvar']);
            Route::get('/editar/{id}',['as'=>'admin.usuarios.editar', 'uses'=>'Admin\UsuarioController@editar']);
            Route::put('/atualizar/{id}',['as'=>'admin.usuarios.atualizar', 'uses'=>'Admin\UsuarioController@atualizar']);
            Route::get('/deletar/{id}',['as'=>'admin.usuarios.deletar', 'uses'=>'Admin\UsuarioController@deletar']);
        });

        /* CATEGORIAS */
        Route::group(['prefix' => 'categorias'], function () {
            Route::get('/', ['as'=>'admin.categorias', 'uses'=>'Admin\CategoriaController@index']); // Listar na pagina index de categorias em admin
            Route::get('/adicionar', ['as'=>'admin.categorias.adicionar', 'uses'=>'Admin\CategoriaController@adicionar']);
            Route::post('/salvar', ['as'=>'admin.categorias.salvar', 'uses'=>'Admin\CategoriaController@salvar']);
            Route::get('/deletar/{id}', ['as'=>'admin.categorias.deletar', 'uses'=>'Admin\CategoriaController@deletar']);
            Route::get('/editar/{id}', ['as'=>'admin.categorias.editar', 'uses'=>'Admin\CategoriaController@editar']);
            Route::put('/atualizar/{id}', ['as'=>'admin.categorias.atualizar', 'uses'=>'Admin\CategoriaController@atualizar']);
        });
        
        /* SUBCATEGORIAS */
        Route::group(['prefix' => 'subcategorias'], function () {
            Route::get('/', ['as'=>'admin.subcategorias', 'uses'=>'Admin\SubCategoriaController@index']); // Listar na pagina index de subcategorias em admin
            Route::get('/adicionar', ['as'=>'admin.subcategorias.adicionar', 'uses'=>'Admin\SubCategoriaController@adicionar']);
            Route::post('/salvar', ['as'=>'admin.subcategorias.salvar', 'uses'=>'Admin\SubCategoriaController@salvar']);
            Route::get('/deletar/{id}', ['as'=>'admin.subcategorias.deletar', 'uses'=>'Admin\SubCategoriaController@deletar']);
            Route::get('/editar/{id}', ['as'=>'admin.subcategorias.editar', 'uses'=>'Admin\SubCategoriaController@editar']);
            Route::put('/atualizar/{id}', ['as'=>'admin.subcategorias.atualizar', 'uses'=>'Admin\SubCategoriaController@atualizar']);
        });
        
        /* PALESTRANTES */
        Route::group(['prefix' => 'palestrantes'], function () {
            Route::get('/', ['as'=>'admin.palestrantes', 'uses'=>'Admin\PalestranteController@index']); //lista na pagina index de palestrantes em admin
            Route::get('/adicionar', ['as'=>'admin.palestrantes.adicionar', 'uses'=>'Admin\PalestranteController@adicionar']);
            Route::post('/salvar', ['as'=>'admin.palestrantes.salvar', 'uses'=>'Admin\PalestranteController@salvar']);
            Route::get('/deletar/{id}', ['as'=>'admin.palestrantes.deletar', 'uses'=>'Admin\PalestranteController@deletar']);
            Route::get('/editar/{id}', ['as'=>'admin.palestrantes.editar', 'uses'=>'Admin\PalestranteController@editar']);
            Route::put('/atualizar/{id}', ['as'=>'admin.palestrantes.atualizar', 'uses'=>'Admin\PalestranteController@atualizar']);
        });

        /* VIDEOS */
        Route::group(['prefix' => 'videos'], function () {
            Route::get('/', ['as'=>'admin.videos', 'uses'=>'Admin\VideoController@index']); //lista na pagina index de videos em admin
            Route::get('/adicionar', ['as'=>'admin.videos.adicionar', 'uses'=>'Admin\VideoController@adicionar']);
            Route::post('/salvar', ['as'=>'admin.videos.salvar', 'uses'=>'Admin\VideoController@salvar']);
            Route::get('/deletar/{id}', ['as'=>'admin.videos.deletar', 'uses'=>'Admin\VideoController@deletar']);
            Route::get('/editar/{id}', ['as'=>'admin.videos.editar', 'uses'=>'Admin\VideoController@editar']);
            Route::put('/atualizar/{id}', ['as'=>'admin.videos.atualizar', 'uses'=>'Admin\VideoController@atualizar']);
        
            /* VIDEOS_CATEGORIA */
            Route::get('/categorias/{id}',['as'=>'admin.videos.categorias', 'uses'=>'Admin\VideoController@categorias']);
            Route::post('/categorias/salvar/{id}',['as'=>'admin.videos.categorias.salvar', 'uses'=>'Admin\VideoController@salvarCategorias']);
            Route::get('/categorias/remover/{id}/{categoria_id}',['as'=>'admin.videos.categorias.remover', 'uses'=>'Admin\VideoController@removerCategorias']);
            
            /*VIDEOS_SUBCATEGORIA*/
            Route::get('/subcategorias/{id}',['as'=>'admin.videos.subcategorias', 'uses'=>'Admin\VideoController@subCategorias']);
            Route::post('/subcategorias/salvar/{id}',['as'=>'admin.videos.subcategorias.salvar', 'uses'=>'Admin\VideoController@salvarSubCategorias']);
            Route::get('/subcategorias/remover/{id}/{subcategoria_id}',['as'=>'admin.videos.subcategorias.remover', 'uses'=>'Admin\VideoController@removerSubCategorias']);
        });

        /* SERIES */
        Route::group(['prefix' => 'series'], function () {
            Route::get('/', ['as'=>'admin.series', 'uses'=>'Admin\SerieController@index']); //lista na pagina index de series em admin
            Route::get('/adicionar', ['as'=>'admin.series.adicionar', 'uses'=>'Admin\SerieController@adicionar']);
            Route::post('/salvar', ['as'=>'admin.series.salvar', 'uses'=>'Admin\SerieController@salvar']);
            Route::get('/deletar/{id}', ['as'=>'admin.series.deletar', 'uses'=>'Admin\SerieController@deletar']);
            Route::get('/editar/{id}', ['as'=>'admin.series.editar', 'uses'=>'Admin\SerieController@editar']);
            Route::put('/atualizar/{id}', ['as'=>'admin.series.atualizar', 'uses'=>'Admin\SerieController@atualizar']);

            /* SERIES_VIDEOS */
            Route::get('/videos/{id}',['as'=>'admin.series.videos', 'uses'=>'Admin\SerieController@videos']);
            Route::post('/videos/salvar/{id}',['as'=>'admin.series.videos.salvar', 'uses'=>'Admin\SerieController@salvarVideos']);
            Route::get('/videos/remover/{id}/{categoria_id}',['as'=>'admin.series.videos.remover', 'uses'=>'Admin\SerieController@removerVideos']);
        });

        /* GALERIAS */
        Route::group(['prefix' => 'galerias'], function () {
            Route::get('/', ['as'=>'admin.galerias', 'uses'=>'Admin\GaleriaController@index']); //lista na pagina index de galerias em admin
            Route::get('/adicionar', ['as'=>'admin.galerias.adicionar', 'uses'=>'Admin\GaleriaController@adicionar']);
            Route::post('/salvar', ['as'=>'admin.galerias.salvar', 'uses'=>'Admin\GaleriaController@salvar']);
            Route::get('/deletar/{id}', ['as'=>'admin.galerias.deletar', 'uses'=>'Admin\GaleriaController@deletar']);
            Route::get('/editar/{id}', ['as'=>'admin.galerias.editar', 'uses'=>'Admin\GaleriaController@editar']);
            Route::put('/atualizar/{id}', ['as'=>'admin.galerias.atualizar', 'uses'=>'Admin\GaleriaController@atualizar']);
        });

        /* IMG GALERIAS */
        Route::group(['prefix' => 'img_galerias'], function () {
            Route::get('/{id}',['as'=>'admin.img_galerias', 'uses'=>'Admin\ImgGaleriaController@index']);
            Route::get('/adicionar/{id}',['as'=>'admin.img_galerias.adicionar', 'uses'=>'Admin\ImgGaleriaController@adicionar']);
            Route::post('/salvar/{id}',['as'=>'admin.img_galerias.salvar', 'uses'=>'Admin\ImgGaleriaController@salvar']);
            Route::get('/editar/{id}',['as'=>'admin.img_galerias.editar', 'uses'=>'Admin\ImgGaleriaController@editar']);
            Route::put('/atualizar/{id}',['as'=>'admin.img_galerias.atualizar', 'uses'=>'Admin\ImgGaleriaController@atualizar']);
            Route::get('/deletar/{id}',['as'=>'admin.img_galerias.deletar', 'uses'=>'Admin\ImgGaleriaController@deletar']);
        });

        /* ARTIGOS */
        Route::group(['prefix' => 'artigos'], function () {
            Route::get('/', ['as'=>'admin.artigos', 'uses'=>'Admin\ArtigoController@index']); //lista na pagina index de artigos em admin
            Route::get('/adicionar', ['as'=>'admin.artigos.adicionar', 'uses'=>'Admin\ArtigoController@adicionar']);
            Route::post('/salvar', ['as'=>'admin.artigos.salvar', 'uses'=>'Admin\ArtigoController@salvar']);
            Route::get('/deletar/{id}', ['as'=>'admin.artigos.deletar', 'uses'=>'Admin\ArtigoController@deletar']);
            Route::get('/editar/{id}', ['as'=>'admin.artigos.editar', 'uses'=>'Admin\ArtigoController@editar']);
            Route::put('/atualizar/{id}', ['as'=>'admin.artigos.atualizar', 'uses'=>'Admin\ArtigoController@atualizar']);
            
            Route::get('/download/{file}', ['as'=>'admin.download', 'uses'=>'Admin\ArtigoController@download'])->where('file', '.+'); 
        });

        /* ÁUDIOS da Rádio */
        Route::group(['prefix' => 'radioaudios'], function () {
            Route::get('/', ['as'=>'admin.radioaudios', 'uses'=>'Admin\AudioRadioController@index']); //lista na pagina index de radioaudios em admin
            Route::get('/adicionar', ['as'=>'admin.radioaudios.adicionar', 'uses'=>'Admin\AudioRadioController@adicionar']);
            Route::post('/salvar', ['as'=>'admin.radioaudios.salvar', 'uses'=>'Admin\AudioRadioController@salvar']);
            Route::get('/deletar/{id}', ['as'=>'admin.radioaudios.deletar', 'uses'=>'Admin\AudioRadioController@deletar']);
            Route::get('/editar/{id}', ['as'=>'admin.radioaudios.editar', 'uses'=>'Admin\AudioRadioController@editar']);
            Route::put('/atualizar/{id}', ['as'=>'admin.radioaudios.atualizar', 'uses'=>'Admin\AudioRadioController@atualizar']);
            
            // Route::get('/download/{file}', ['as'=>'admin.download', 'uses'=>'Admin\AudioRadioController@download'])->where('file', '.+'); 
        });

        /* AUDIOS */
        Route::group(['prefix' => 'audios'], function () {
            Route::get('/', ['as'=>'admin.audios', 'uses'=>'Admin\AudioController@index']); //lista na pagina index de audios em admin
            Route::get('/adicionar', ['as'=>'admin.audios.adicionar', 'uses'=>'Admin\AudioController@adicionar']);
            Route::post('/salvar', ['as'=>'admin.audios.salvar', 'uses'=>'Admin\AudioController@salvar']);
            Route::get('/deletar/{id}', ['as'=>'admin.audios.deletar', 'uses'=>'Admin\AudioController@deletar']);
            Route::get('/editar/{id}', ['as'=>'admin.audios.editar', 'uses'=>'Admin\AudioController@editar']);
            Route::put('/atualizar/{id}', ['as'=>'admin.audios.atualizar', 'uses'=>'Admin\AudioController@atualizar']);
        });

        /* LIVROS */
        Route::group(['prefix' => 'livros'], function () {
            Route::get('/', ['as'=>'admin.livros', 'uses'=>'Admin\LivroController@index']); //lista na pagina index de livros em admin
            Route::get('/adicionar', ['as'=>'admin.livros.adicionar', 'uses'=>'Admin\LivroController@adicionar']);
            Route::post('/salvar', ['as'=>'admin.livros.salvar', 'uses'=>'Admin\LivroController@salvar']);
            Route::get('/deletar/{id}', ['as'=>'admin.livros.deletar', 'uses'=>'Admin\LivroController@deletar']);
            Route::get('/editar/{id}', ['as'=>'admin.livros.editar', 'uses'=>'Admin\LivroController@editar']);
            Route::put('/atualizar/{id}', ['as'=>'admin.livros.atualizar', 'uses'=>'Admin\LivroController@atualizar']);
            
            // Route::get('/download/{file}', ['as'=>'admin.download', 'uses'=>'Admin\LivroController@download'])->where('file', '.+'); 
        });

        /* SLIDE HOME */
        Route::group(['prefix' => 'slides'], function () {
            Route::get('/',['as'=>'admin.slides', 'uses'=>'Admin\SlideController@index']);
            Route::get('/adicionar',['as'=>'admin.slides.adicionar', 'uses'=>'Admin\SlideController@adicionar']);
            Route::post('/salvar',['as'=>'admin.slides.salvar', 'uses'=>'Admin\SlideController@salvar']);
            Route::get('/editar/{id}',['as'=>'admin.slides.editar', 'uses'=>'Admin\SlideController@editar']);
            Route::put('/atualizar/{id}',['as'=>'admin.slides.atualizar', 'uses'=>'Admin\SlideController@atualizar']);
            Route::get('/deletar/{id}',['as'=>'admin.slides.deletar', 'uses'=>'Admin\SlideController@deletar']);
        });

        /* MÍDIAS */
        Route::group(['prefix' => 'midias'], function () {
            Route::get('/',['as'=>'admin.midias', 'uses'=>'Admin\MidiaController@index']);
            Route::get('/adicionar',['as'=>'admin.midias.adicionar', 'uses'=>'Admin\MidiaController@adicionar']);
            Route::post('/salvar',['as'=>'admin.midias.salvar', 'uses'=>'Admin\MidiaController@salvar']);
            Route::get('/editar/{id}',['as'=>'admin.midias.editar', 'uses'=>'Admin\MidiaController@editar']);
            Route::put('/atualizar/{id}',['as'=>'admin.midias.atualizar', 'uses'=>'Admin\MidiaController@atualizar']);
            Route::get('/deletar/{id}',['as'=>'admin.midias.deletar', 'uses'=>'Admin\MidiaController@deletar']);
        });

        Route::group(['prefix' => 'paginas'], function () {
            /* INDEX PÁGINAS */
            Route::get('',['as'=>'admin.paginas', function(){
                return view('admin.paginas.index');
            }]);

            /* SLIDE HOME */
            Route::group(['prefix' => 'slides'], function () {
                Route::get('/',['as'=>'admin.paginas.slides', 'uses'=>'Admin\SlideController@index']);
                Route::get('/adicionar',['as'=>'admin.paginas.slides.adicionar', 'uses'=>'Admin\SlideController@adicionar']);
                Route::post('/salvar',['as'=>'admin.paginas.slides.salvar', 'uses'=>'Admin\SlideController@salvar']);
                Route::get('/editar/{id}',['as'=>'admin.paginas.slides.editar', 'uses'=>'Admin\SlideController@editar']);
                Route::put('/atualizar/{id}',['as'=>'admin.paginas.slides.atualizar', 'uses'=>'Admin\SlideController@atualizar']);
                Route::get('/deletar/{id}',['as'=>'admin.paginas.slides.deletar', 'uses'=>'Admin\SlideController@deletar']);
            });
        
            /* CONTATOS */
            Route::group(['prefix' => 'contatos'], function () {
                Route::get('/',['as'=>'admin.paginas.contatos', 'uses'=>'Admin\ContatoController@index']);
                Route::get('/adicionar',['as'=>'admin.paginas.contatos.adicionar', 'uses'=>'Admin\ContatoController@adicionar']);
                Route::post('/salvar',['as'=>'admin.paginas.contatos.salvar', 'uses'=>'Admin\ContatoController@salvar']);
                Route::get('/editar/{id}',['as'=>'admin.paginas.contatos.editar', 'uses'=>'Admin\ContatoController@editar']);
                Route::put('/atualizar/{id}',['as'=>'admin.paginas.contatos.atualizar', 'uses'=>'Admin\ContatoController@atualizar']);
                Route::get('/deletar/{id}',['as'=>'admin.paginas.contatos.deletar', 'uses'=>'Admin\ContatoController@deletar']);
            });

            /* SOBRE-NOS */
            Route::group(['prefix' => 'sobrenos'], function () {
                Route::get('/',['as'=>'admin.paginas.sobrenos', 'uses'=>'Admin\SobrenosController@index']);
                Route::get('/adicionar',['as'=>'admin.paginas.sobrenos.adicionar', 'uses'=>'Admin\SobrenosController@adicionar']);
                Route::post('/salvar',['as'=>'admin.paginas.sobrenos.salvar', 'uses'=>'Admin\SobrenosController@salvar']);
                Route::get('/editar/{id}',['as'=>'admin.paginas.sobrenos.editar', 'uses'=>'Admin\SobrenosController@editar']);
                Route::put('/atualizar/{id}',['as'=>'admin.paginas.sobrenos.atualizar', 'uses'=>'Admin\SobrenosController@atualizar']);
                Route::get('/deletar/{id}',['as'=>'admin.paginas.sobrenos.deletar', 'uses'=>'Admin\SobrenosController@deletar']);
            });

            /* AO VIVO */
            Route::group(['prefix' => 'aovivo'], function () {
                Route::get('/',['as'=>'admin.paginas.aovivo', 'uses'=>'Admin\StreamingController@index']);
                Route::get('/adicionar',['as'=>'admin.paginas.aovivo.adicionar', 'uses'=>'Admin\StreamingController@adicionar']);
                Route::post('/salvar',['as'=>'admin.paginas.aovivo.salvar', 'uses'=>'Admin\StreamingController@salvar']);
                Route::get('/editar/{id}',['as'=>'admin.paginas.aovivo.editar', 'uses'=>'Admin\StreamingController@editar']);
                Route::put('/atualizar/{id}',['as'=>'admin.paginas.aovivo.atualizar', 'uses'=>'Admin\StreamingController@atualizar']);
                Route::get('/deletar/{id}',['as'=>'admin.paginas.aovivo.deletar', 'uses'=>'Admin\StreamingController@deletar']);
            });
        });
    });
});

// /* Testes Many to Many */
// $this->get('many-to-many', 'Admin\VideoController@ManyToMany');
// $this->get('many-to-many-inverse', 'Admin\VideoController@ManyToManyInverse');
// $this->get('many-to-many-insert', 'Admin\VideoController@ManyToManyInsert');

// Route::get('/home', 'HomeController@index')->name('home');
