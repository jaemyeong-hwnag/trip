<script>
    $( document ).ready( function() {
        var jbOffset = $( '.header-w3layouts' ).offset();
        $( window ).scroll( function() {
            if ( $( document ).scrollTop() > jbOffset.top ) {
                $('.header-w3layouts').addClass('jbFixed');
                $('.header-w3layouts').addClass('jbFixed_style');
            }
            else {
                $('.header-w3layouts').removeClass('jbFixed');
                $('.header-w3layouts').removeClass('jbFixed_style');
            }
        });
    } );
</script>

