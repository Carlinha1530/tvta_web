<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('/img/logos/logo1.png')}}" type="image/x-icon">
    <title>{{ config('app.name', 'Laravel') }}</title>


    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/materialize/dist/css/materialize.css')}}">
    <link rel="stylesheet" href="{{asset('/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style_admin.css')}}">
    
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}

    <link rel="stylesheet" href="{{asset('/css/datatable/material.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/datatable/dataTables.material.min.css')}}">
    {{-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css"> --}}

</head>
<body id="app-layout">
    <main>
        @include('layouts._admin._navbar')
        
        <br>
        @if(Session::has('mensagem'))
          {{-- <div class="container"> --}}
            <div class="row">
                <div class="col s12">
                    <div class="card {{ Session::get('mensagem')['class'] }}">
                        <div align="center" class="card-content">
                            <span class="center">{{ Session::get('mensagem')['msg'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
          {{-- </div> --}}
        @endif 
        
        <div class="row">
            <div class="col s12">
                {{-- <div class="container"> --}}
                    @yield('content')
                {{-- </div> --}}
            </div>
        </div>
        
    </main>

    <!-- Scripts -->
    <script src="{{asset('lib/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('lib/materialize/dist/js/materialize.js')}}"></script>
    
    {{-- TinyMCE / Caixa de Texto --}} 
    {{-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> --}}    
    <script src="{{asset('lib/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('lib/tinymce/script_tinymce.js')}}"></script>  
    
    {{-- DataTables --}}
    <script src="{{asset('js/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/datatable/dataTables.material.min.js')}}"></script>
     {{-- <script src="{{asset('js/datatable/script.datatable.js')}}"></script> --}}
    {{--<script src="//code.jquery.com/jquery-1.12.4.js"></script>--}}
    {{--<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>--}}
    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                responsive: true,
                columnDefs: [
                    {
                        // targets: [ 0 ],
                        className: 'mdl-data-table__cell--non-numeric'
                    }
                ],
                "blengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
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
