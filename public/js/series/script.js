//select vieo pra reproduzir
$( function(){
    $( 'body' ).on( 'click', '#video a', function(){
        var it = $( this ),
            src = it.attr( 'href' );

        $( '#iframe-container' ).find( 'iframe' ).attr( 'src', src );
        // console.log( src );
        return false;
    });
});

//Scroll -- Barra de rolagem
$(function() {
   $('#overflow').mCustomScrollbar();
});