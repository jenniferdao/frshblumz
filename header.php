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

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="width=100%; overflow-x:hidden;">
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
<div class="spacer" style=" width: 100%;height: 212px;">
    &nbsp;
</div>    
<?php 
	if ( is_home() && is_front_page() ){
?>			


<div class="flexslider" id="slider1" style="margin-left:-72px;">

  <ul class="slides" style="">
    <li>
      <img src="http://i.imgur.com/AULaR5H.jpg" />
    </li>
    <li>
      <img src="http://i.imgur.com/5Jtb54h.jpg" />
    </li>
    <li>
      <img src="http://i.imgur.com/ZctwfL2.jpg" />
    </li>
    <li>
      <img src="http://i.imgur.com/JGL2I8a.jpg" />
    </li>
  </ul>
</div>
<script language="javascript">

window.onload = function () {
	var w = document.getElementById("slider1").parent().width();
	document.getElementById("slider1").style.width = w + 72;
//	document.getElementById("wpadminbar").style.width = w;
	 }

</script>

<?php 
//		if ( function_exists( 'easingslider' ) ) 
//		{ 
//			easingslider( 1856 );
//		}
	}
?>

	<div id="content" class="site-content">
    
