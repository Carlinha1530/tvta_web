<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DownloadController extends Controller
{
 	public function getDownload()
 	{
 		// $file="/file/Formulário_Voluntário.docx";
		// return Response::download($file);
		// 
         $file= public_path(). "/file/Formulário_Voluntário.docx";   
    	return response()->download($file);

 	}
}
