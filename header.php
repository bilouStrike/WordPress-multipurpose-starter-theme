<?php
/**
 * The template for displaying the header
 *
 * @package GutenWord
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<title> Gutenword theme </title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	<script type="text/javascript">

		/*var phone = window.matchMedia("(max-width: 450px)");
		gtnw_media_phone(phone);
		phone.addListener(gtnw_media_phone);

		var tablet = window.matchMedia("(min-width: 452px)") && window.matchMedia("(max-width: 750px)") ;
		gtnw_media_tablet(tablet);
		tablet.addListener(gtnw_media_tablet);
		
		var Desktop =  window.matchMedia("(min-width: 752px)");
		gtnw_media_desktop(Desktop);
		Desktop.addListener(gtnw_media_desktop);

		function gtnw_media_phone(phone)
		{
			if (phone.matches) {
		  		alert('mobile');
			} else if(tablet.matches) 
			{
				alert('tablet');
			}
		}
		

		function gtnw_media_tablet(tablet)
		{
			if (tablet.matches) {
		  		alert('Tablet');
			} else {
				alert('Desktop');
			}
		}

		function gtnw_media_desktop(desktop,tablet)
		{
			if (desktop.matches) {
		  		alert('Desktop');
			} else if(tablet.matches)
			{
				alert('tablet');
			} else {
				alert('mobile');
			}
		}
		
		//phone.addListener(gtnw_media_calc);
		//phone.addListener(gtnw_media_calc);


		/*function myFunction(x) {
		  if (x.matches) { // If media query matches
		    document.body.style.backgroundColor = "yellow";
		  } else {
		    document.body.style.backgroundColor = "pink";
		  }
		}

		var x = window.matchMedia("(min-width: 700px)")
		myFunction(x) // Call listener function at run time
		x.addListener(myFunction) // Attach listener function on state changes

*/
		//if (window.matchMedia("(max-width: 480px)").matches) {
    		//document.getElementsByClassName("ads-div")[0].style.visibility='hidden'; 
    	//	document.getElementById('header-ads').style.display = "none";
    	//}
		</script>
   
	</script>
	
</head>
	<body <?php body_class(); ?>>
		<?php
			/*
			The main header
			*/
			gtnw_section_helper::show_the_header_section();
		?>
