
var client = algoliasearch("HJ3W9P8PT0", "00f48e3cbac3aa7df1a9baed4c90f4f4");
    // var index1 = client.initIndex('categorias');
    var index2 = client.initIndex('videos');
    // $index->setSettings(array("searchableAttributes" => array("show_name", "episode_name", "episode_of")));

    autocomplete('#aa-search-input', { hint: false }, [
        // {
        //     source: autocomplete.sources.hits(index1, {hitsPerPage: 5}),
        //     displayKey: 'nome',
        //     templates: {

        //         suggestion: function(suggestion) {
        //           // return '<span>' +
        //             return suggestion._highlightResult.nome.value;
        //             // suggestion._highlightResult.team.value + '</span>';
        //         }
        //     }
        // },

        {
          source: autocomplete.sources.hits(index2, {hitsPerPage: 5}),
            displayKey: 'nome',
            templates: {

                suggestion: function(suggestion) {
                  // return '<span>' +
                    // return suggestion._highlightResult.nome.value;
                    // suggestion._highlightResult.team.value + '</span>';

                    return '<span>' +
                    suggestion._highlightResult.nome.value + '</span><span>' +
                    suggestion._highlightResult.descricao.value + '</span>';
                }
            }
        },

    ]).on('autocomplete:selected', function (event, suggestion, dataset){
        console.log(suggestion, dataset);
    });