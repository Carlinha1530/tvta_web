$(document).ready(function() {
    // jQuery.fn.dataTableExt.oPagination.iFullNumbersShowPages = 20;
    $('#example').DataTable( {
        columnDefs: [
            {
                // targets: [ 0 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ],
        "pageLength": 20,
        "lengthMenu": [[10, 25, 50], [10, 25, 50]],
        order: [[0, 'DESC']],
        // "paging": false,
        // "bInfo" : false,
        "language": {
            "lengthMenu": "Exibir _MENU_ registros por page",
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