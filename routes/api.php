<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('/videos', function() {
// 	$videos = App\Video::All();
// 	// foreach ($carros as $carro ) {
// 	// 	$carro->valor_format = number_format($carro->valor, 2,",",".");//formatando o valor pra real
// 	// 	$carro->marca;//pegando a marca
// 	// 	$carro->categorias;//pegando as categorias
// 	// 	$carro->imagens;//pegando as imagens

// 	// }
//    	// return $carros; 
// });

Route::get('/videos', ['as'=>'videos', 'uses'=>'Api\ApiController@videos']); 
// Route::get('/series', ['as'=>'series', 'uses'=>'Api\ApiController@series']); 