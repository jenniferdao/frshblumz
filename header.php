<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package frshblumz
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<link rel="stylesheet" href="flexslider.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="jquery.flexslider.js"></script>


<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider(); ({
    animation: "slide",
    controlsContainer: ".flex-container"
    });
  });
</script>


<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'frshblumz' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a class="site-branding" href="https://phoenix.sheridanc.on.ca/~ccit3430/" rel="home">
			<img class="logo" src="https://phoenix.sheridanc.on.ca/~ccit3430/wp-content/themes/frshblumz/images/frshblumzlogofinal.png">
			</a>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'frshblumz' ); ?></button>
			
        <div class="menu-main-container">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>	     
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

<?php 
	if ( is_home() && is_front_page() ){
?>			

<div class="flexslider" style="width:100%;">
  <ul class="slides">
    <li>
      <img src="https://i.imgur.com/zZhe8MN.png" />
    </li>
    <li>
      <img src="https://i.imgur.com/W3jzacf.png" />
    </li>
    <li>
      <img src="https://i.imgur.com/Qbuvxc4.png" />
    </li>
    <li>
      <img src="https://i.imgur.com/d8tDH2m.png" />
    </li>
  </ul>
</div>

<?php 
//		if ( function_exists( 'easingslider' ) ) 
//		{ 
//			easingslider( 1856 );
//		}
	}
?>

	<div id="content" class="site-content">