<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.19/angular.js"></script>
    <div class="container" ng-app>
        <ul class="nav nav-tabs" role="tablist">
            <li>
                <a ng-click="tab=1" ng-class="{'active' : tab==1}">Todos</a>
            </li>
          @foreach($subcategorias as $subcategoria)
          <li><a ng-click="tab={{$subcategoria->id}}" ng-class="{'active' : tab=={{$subcategoria->id}}}">{{ $subcategoria->nome }}</a></li>
          @endforeach
        </ul><br><br>

        <div class="tabs-container">
            <div class="tab-content" ng-show="tab == 1">
                @foreach($videos as $video)
                <div class="col-md-3 wow fadeInRight" data-wow-delay=".2s">
                    <div class="box_1">
                        <a data-type="video" href="{{ Route('site.video', [$video->id]) }}">    
                            <img src="{{asset($video->imagem)}}" alt="{{ $video->nome }}"/>
                        </a>
                        <div class="caption">   
                            <h5 class="text_7 color_3">
                                <a href="{{ Route('site.video', [$video->id]) }}">
                                {{ $video->nome }}</a>
                            </h5>
                            <small class="text_8 color_4">
                                <strong style="font-weight: bolder;">Sub-Categorias:</strong>
                                @foreach($video->subcategoria as $cat)
                                    @if($video->subcategoria->count() > 1)
                                        {{ $cat->nome }}, 
                                    @else
                                        {{ $cat->nome }} 
                                    @endif
                                @endforeach
                            </small><br>
                            <p class="text_9 color_3">{{ str_limit($video->descricao, 70) }}
                            <a href="{{ Route('site.video', [$video->id]) }}"><strong style="font-weight: bold;">Ver mais</strong></a></p>
                            </p>

                            <div class="fb-like" data-href="{{ $video->link_video }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false" >Curtir</div>

                            <div class="fb-share-button" data-href="{{ $video->link_video }}" data-layout="button_count" >Compartilhar</div><br><br>

                            <a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ $video->link_video }}" data-count="horizontal" data-lang="pt" data-dnt="true">Tweetar</a>
                        </div><br>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="tab-content" ng-show="tab == {{$subcategoria->id}}">
                <h3>Segunda aba</h3>
                <p>Lorem ...</p>
            </div>
        </div>
    </div><br><br>