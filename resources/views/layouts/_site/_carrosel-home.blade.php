<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    @foreach($slides as $slide)
      @if(!empty($slide->ordem == 1))
        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
      @endif
      @if(!empty($slide->ordem == 2))
        <li data-target="#bs-carousel" data-slide-to="1"></li>
      @endif
      @if(!empty($slide->ordem == 3))
        <li data-target="#bs-carousel" data-slide-to="2"></li>
      @endif
      @if(!empty($slide->ordem == 4))
        <li data-target="#bs-carousel" data-slide-to="3"></li>
      @endif
      @if(!empty($slide->ordem == 5))
        <li data-target="#bs-carousel" data-slide-to="4"></li>
      @endif
    @endforeach
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    @foreach($slides as $slide)
        @if(!empty($slide->ordem == 1))
            <div class="item slides active">
                <div class="slide-1">
                    {{-- <span class="thumbnail" style="background: url('{{asset($slide->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 60%; max-height: 100%;"></span> --}}
                    <a href="{{ $slide->link }}" title="Click para mais detalhes">
                      <img class="img_slide" src="{{asset($slide->imagem)}}" alt="{{ $slide->link }}">
                    </a>
                </div>
              <div class="hero">
                <hgroup>
                    <h1>{{ str_limit($slide->nome, 20) }}</h1>        
                    <h3>{{ str_limit($slide->descricao, 55) }}</h3>
                </hgroup>
                {{-- @if(isset($slide->link))
                  <a href="{{ $slide->link }}" class="btn btn-hero btn-lg" role="button">Veja os detalhes</a>
                @endif --}}
              </div>
            </div>
        @endif
        @if(!empty($slide->ordem == 2))
          <div class="item slides">
              <div class="slide-2">
                <a href="{{ $slide->link }}" title="Click para mais detalhes">
                  <img class="img_slide" src="{{asset($slide->imagem)}}" alt="{{ $slide->link }}">
                </a>
              </div>
            <div class="hero">        
              <hgroup>
                  <h1>{{ str_limit($slide->nome, 20) }}</h1>        
                  <h3>{{ str_limit($slide->descricao, 55) }}</h3>
              </hgroup>   
            </div>
          </div>
        @endif
        @if(!empty($slide->ordem == 3))
          <div class="item slides">
              <div class="slide-3">
                <a href="{{ $slide->link }}" title="Click para mais detalhes">
                  <img class="img_slide" src="{{asset($slide->imagem)}}" alt="{{ $slide->link }}">
                </a>
              </div>
            <div class="hero">        
              <hgroup>
                  <h1>{{ str_limit($slide->nome, 20) }}</h1>        
                  <h3>{{ str_limit($slide->descricao, 55) }}</h3>
              </hgroup>
            </div>
          </div>
        @endif
        @if(!empty($slide->ordem == 4))
          <div class="item slides">
              <div class="slide-3">
                <a href="{{ $slide->link }}" title="Click para mais detalhes">
                  <img class="img_slide" src="{{asset($slide->imagem)}}" alt="{{ $slide->link }}">
                </a>
              </div>
            <div class="hero">        
              <hgroup>
                  <h1>{{ str_limit($slide->nome, 20) }}</h1>        
                  <h3>{{ str_limit($slide->descricao, 55) }}</h3>
              </hgroup>
            </div>
          </div>
        @endif
        @if(!empty($slide->ordem == 5))
          <div class="item slides">
              <div class="slide-3">
                <a href="{{ $slide->link }}" title="Click para mais detalhes">
                  <img class="img_slide" src="{{asset($slide->imagem)}}" alt="{{ $slide->link }}">
                </a>
              </div>
            <div class="hero">        
              <hgroup>
                  <h1>{{ str_limit($slide->nome, 20) }}</h1>        
                  <h3>{{ str_limit($slide->descricao, 55) }}</h3>
              </hgroup>
            </div>
          </div>
        @endif 
    @endforeach
  </div> 
</div>

