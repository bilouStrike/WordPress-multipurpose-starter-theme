jQuery( document ).ready( function( $ ) {
    // Uploading Logo
    var file_frame;
    jQuery('#upload_image_button').on('click', function( event ){
        event.preventDefault();
        // If the media frame already exists.
        if ( file_frame ) {
            file_frame.open();
            return;
        } 
        file_frame = wp.media.frames.file_frame = wp.media({
            title: 'Select a Logo to upload',
            button: {
                text: 'Use this image as Logo',
            },
            multiple: false
        });
        // When an image is selected, run a callback.
        file_frame.on( 'select', function() {
            attachment = file_frame.state().get('selection').first().toJSON();
            $( '#image-preview' ).attr( 'src', attachment.url );
            $( '#gtnw_logo' ).val( attachment.url );
        });
            file_frame.open();
    });
});