jQuery( document ).ready( function( $ ) {
    $('#gtnw_theme_panel_form' ).submit( function( event ) {
        // Display loading img
        $('.load').css('display', 'block');    
        // Prevent the default form submit. 
        event.preventDefault();            
        // serialize the form data
        let dataStored;
        var ajax_form_data = $("#gtnw_theme_panel_form").serialize();
            $.ajax({
                url:    params.ajaxurl, // domain/wp-admin/admin-ajax.php
                type:   'post',
                data:  {
                    action: 'gtnw_process_options',
                    gtnw_ajax_token : params.gtnw_ajax_token, 
                    dataStored : ajax_form_data,  
                }
        })
        .done( function( response ) { // response from the PHP action
            $('.load').css('display', 'none');
            $('#saved').fadeIn('slow');
        })
        // something went wrong  
        .fail( function() {
            $('.load').css('display', 'none');
            $('#error').fadeIn('slow');
        })
    });       
});
