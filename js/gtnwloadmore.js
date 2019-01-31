jQuery(function($){ 
	$('.gtnw_loadmore').click(function(){
		var button = $(this),
		    data = {
			'action': 'loadmore',
			'query': gtnw_loadmore_params.posts, 
			'page' : gtnw_loadmore_params.current_page
		};
 		$.ajax({ 
			url : gtnw_loadmore_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Loading...'); 
			},
			success : function( data ){
				if( data ) { 
					button.text( 'More posts' ).before(data); // insert new posts
					gtnw_loadmore_params.current_page++;
 
					if ( gtnw_loadmore_params.current_page == gtnw_loadmore_params.max_page ) 
						button.remove(); // if last page, remove the button
 				} else {
					button.remove(); // if no data, remove the button as well
				}
			}
		});
	});
});