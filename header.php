<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="main">

 *

 * @package WordPress

 * @subpackage Twenty_Twelve

 * @since Twenty Twelve 1.0

 */

?><!DOCTYPE html>

<!--[if IE 7]>

<html class="ie ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html class="ie ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 7) | !(IE 8)  ]><!-->

<html <?php language_attributes(); ?>>

<!--<![endif]-->

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php wp_title( '|', true, 'right' ); ?></title>



<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>

<!--[if lt IE 9]>

<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>

<![endif]-->

<?php wp_head(); ?>

<script type="text/javascript">



  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', 'UA-39694424-1']);

  _gaq.push(['_trackPageview']);



  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();



</script>

<script src='http://apis.google.com/js/plusone.js' type='text/javascript'></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39694424-1', 'reseña.org');
  ga('send', 'pageview');

</script>
</head>



<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
<div class="container">
	<header style="position:relative;" id="masthead" class="site-header" role="banner">

		<hgroup>

  <div style="width:100%,height:1px;paddgin-top:5px;padding-bottom:5px;"></div>

<div style="border-top: 5px solid #AF0000;width:100%,height:1px;"></div>

<div style="width:100%,height:1px;padding-top:5px;padding-bottom:5px;"></div>



<link type="image/x-icon" href="<?php echo home_url( '/' ); ?>img/favicon.ico" rel="icon"/>

<link type="image/x-icon" href="<?php echo home_url( '/' ); ?>img/favicon.ico" rel="shortcut icon"/>

<?php $header_image = get_header_image();

		if ( ! empty( $header_image ) ) : ?>

			<img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />

		<?php endif; ?>			



<div style="position:absolute;left:850px;top:40px;"><g:plusone></g:plusone></div>

<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

		</hgroup>



		<nav id="site-navigation" class="main-navigation" role="navigation">

			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>

			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>

		</nav><!-- #site-navigation -->



	<span style=" color: white;

    font-family: verdana;

    font-size: 12px;

    font-variant: small-caps;

    left: 10px;

    position: relative;

    top: -137px;">Encuéntranos en: www.reseña.org</span>	

	</header><!-- #masthead -->



	<div id="main" class="wrapper">
		<div class="row">