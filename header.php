<?php
/**
 * The template for displaying the header
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- <meta name="" content="<?php// bloginfo('description'); ?>" /> -->
	<meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); echo " - "; the_excerpt('', true);
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href='https://fonts.googleapis.com/css?family=Cabin|Lato:900' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/vendor/modernizr-2.6.2.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/vendor/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/plugins.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
	<?php wp_head(); ?>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-86898503-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>

<body <?php body_class(); ?>>
		 <!--[if lt IE 7]>
				 <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		 <![endif]-->

		 <!-- SIDEBAR -->
	<?php	 get_template_part( 'content', 'fixed' ); ?>


		 <div id="ajax-loader">
