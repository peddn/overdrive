$( document ).ready( function() {

    $( ".login-button" ).click(function() {
        
        var url = $( this ).data( "home" );
        
        url += "?login";
        
        console.log( url );
        
        $(location).attr( 'href', url );
        
    });
    
});
