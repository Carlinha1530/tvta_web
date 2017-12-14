<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;

class ApiController extends Controller
{
    public function videos()
    {
        $videos = Video::where('publicar','=','sim')
                        ->where('idioma','=','portugues')
                        ->orderBy('ordem_data', 'DESC')
                        ->take(4)
                        ->get();
        
        foreach ($videos as $video ) {
            $video->imagem = "http://terceiroanjo.com/".$video->imagem;
            $video->nome = str_limit($video->nome, $limit = 18);
            $video->serie; // busca a serie do video
            $video->palestrante; // busca o palestrante do video
            $video->categoria; // busca a categotia do video

            
        }
        return $videos;
        
        // $linkV = trim($videos->link_original);
        // preg_match_all("@\/\/(.*?).com@", $linkV, $output_array);
        // $videoType = $output_array[1][0];
        
        // if ($videoType=="www.youtube") {
        //     $linkV = trim($videos->link_original);
        //     preg_match_all("/v\=(.*?)$/", $linkV, $output_array);
        //     $videoId = $output_array[1][0];
        //     $url = "https://www.youtube.com/embed/".$videoId."?feature=oembed&amp;autoplay=1";

        //     $videos->link_video = $url;

        // }elseif ($videoType=="vimeo") {
        //     $linkV = trim($videos->link_original);
        //     preg_match_all("@vimeo.com\/(.*?)$@", $linkV, $output_array);
        //     $videoId = $output_array[1][0];
        //     $url = "https://player.vimeo.com/video/".$videoId."?feature=oembed&amp;autoplay=1";

        //     $videos->link_video = $url;
        // }
    }
}
