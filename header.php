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
</head>
	<body <?php body_class(); ?>>
		<?php
			/*
			The main header
			*/
			gtnw_section_helper::show_the_header_section();
		?>
