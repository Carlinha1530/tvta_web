<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('/img/logos/Globo grande.png" type="image/x-icon')}}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style_serie.css')}}">
    
    {{-- datatablebootstrap --}}
    <link rel="stylesheet" href="{{asset('/css/datatable/dataTables.bootstrap4.min.css')}}">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap4.min.css"> --}}
    {{-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css"> --}}

    {{-- datatable material --}}
    {{-- <link rel="stylesheet" href="{{asset('/css/datatable/jquery.dataTables.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('/css/datatable/material.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('/css/datatable/dataTables.material.min.css')}}"> --}}

    
    <style>
        /*ul.breadcrumb {
            padding: 21px 15px;
            margin-bottom: 22px;
            list-style: none;
            background-color: #0D47A1 !important;
            font-size: 18px;
        }

        ul.breadcrumb li {
            display: inline;
            color: #fff;
        }

        ul.breadcrumb li+li:before {
            padding: 8px;
            color: rgba(255, 255, 255, 0.7);
            content: "/\00a0";
        }

        ul.breadcrumb li a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
        }*/
    </style>

</head>
<body style="background-color: #ffffff;">
    <div class="" id="app">
        @include('layouts._admin._navbar_serie')
        


        <div class="container">
            <div class="row">
                <!-- <h3 style="text-align:center">Vídeos para a Serie: {{$series->nome}}</h3><br> -->
                <h3 class="center">Vídeos para a Serie: {{$series->nome}}</h3>
                {{-- <div class="panel-heading blue darken-4" style="padding:12px 0 12px 12px;">
                    <a class="bread" href="{{ Route('admin.principal') }}">Home</a> /
                    <a class="bread" href="{{ route('admin.series')}}">Lista de Series</a> /
                    <a class="last">Adicionar Vídeos</a>
                </div> --}}
                
                <div class="container">
                    {{-- <div class="row"> --}}
                        {{-- <div class="col-md-12"> --}}
                            <ul class="breadcrumb">
                                <li><a class="bread" href="{{ Route('admin.principal') }}">Início</a></li>
                                <li><a class="bread" href="{{ route('admin.series')}}">Lista de Series</a></li>
                                <li style="">Adicionar Vídeos</li>
                            </ul>
                        {{-- </div> --}}
                    {{-- </div> --}}
                </div>
                

                <div class="panel-body">
                    <div class="panel-body">
                        <form class="form-inline" action="{{route('admin.series.videos.salvar',$series->id)}}" method="post">
                            {{ csrf_field() }}
                            @include('admin.series._form_video')
                            <button class="btn btn-success btn-sm">Adicionar</button>
                        </form><br><br>
                        <table class="table table-striped table-bordered" cellspacing="0" width="100%"  id="example" >
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Categorias</th>
                                    <th>Sub-Cat.</th>
                                    <th>Palestrante</th>
                                    <th>Resumo</th>
                                    <th>Url</th>
                                    <th>Imagem</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($series->video as $vid)
                                    <tr>
                                        <td>{{ $vid->nome }}</td>
                                        <td>
                                            @foreach($vid->categoria as $cat)
                                                @if($vid->categoria->count() > 1)
                                                    {{ $cat->nome }}/ 
                                                @else
                                                    {{ $cat->nome }} 
                                                @endif
                                            @endforeach
                                        </td>
                                        <td style="width: 100px">
                                            @foreach($vid->subcategoria as $cat)
                                                @if($vid->subcategoria-> count() > 1)
                                                    {{ $cat->nome }}/
                                                @else
                                                    {{ $cat->nome }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{ $vid->palestrante->nome }}</td>
                                        <td>{{ str_limit($vid->resumo, 50) }}</td>
                                        <td>{{ $vid->link_video }}</td>
                                        <td><img width="100" src="{{asset($vid->imagem)}}"></td>
                                        <td>
                                            <a href="javascript: if(confirm('Remover essa Vídeo?')){ window.location.href = '{{ route('admin.series.videos.remover',[$series->id,$vid->id]) }}' }"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .center, .center-align {
            text-align: center;
            color: rgba(0,0,0,.87);
        } 
        .blue.darken-4 {
            background-color: #0D47A1 !important;
        }
        .last {
            font-size: 18px; 
            color: #fff;
        }
        .bread {
            font-size: 18px; 
            color: rgba(255, 255, 255, 0.7);
        }
    </style>

    <!-- Scripts 
    <script src="{{asset('/js/app.js')}}"></script>
    <script src="{{asset('js/datatable/jquery.dataTables.min.js')}}"></script>
    
    <script src="{{asset('js/datatable/dataTables.material.min.js')}}"></script>
    <script src="{{asset('js/datatable/script.datatable.js')}}"></script>-->
    
    <script src="{{asset('js/datatable/jquery-1.12.4.js')}}"></script>
    <script src="{{asset('js/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/datatable/dataTables.bootstrap4.min.js')}}"></script>

    <!--
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js"></script>
    -->
    
    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                columnDefs: [
                    {
                        // targets: [ 0 ],
                        className: 'mdl-data-table__cell--non-numeric'
                    }
                ],
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                order: [[0, 'DESC']],
                // "paging": false,
                // "bInfo" : false,
                "language": {
                    "lengthMenu": "Exibir _MENU_ registros por página",
                    "zeroRecords": "Nada encontrado, desculpe",
                    "info": "Mostrando a página _PAGE_ de _PAGES_",
                    "infoEmpty": "Nenhum registro disponível",
                    "infoFiltered": "(Filtrado de _MAX_ registros totais)",
                    "loadingRecords": "Carregando...",
                    "processing":     "Processando...",
                    "search":         "Buscar: "
                },
                // "oPaginate": {
                //     "sFirst":    "Primeiro",
                //     "sLast":    "Último",
                //     "sNext":    "Próximo",
                //     "sPrevious": "Anterior"
                // }
            });
        });
    </script>


</body>
</html>

