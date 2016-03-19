<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package frshblumz
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
<div class="flexslider">
  <ul class="slides">
    <li>
      <img src="https://upload.wikimedia.org/wikipedia/commons/c/c4/Bildtankstelle_1_026.jpg" />
    </li>
    <li>
      <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Bildtankstelle_1_011.jpg" />
    </li>
    <li>
      <img src="https://upload.wikimedia.org/wikipedia/commons/f/f9/Bildtankstelle_1_059.jpg" />
    </li>
    <li>
      <img src="https://commons.wikimedia.org/wiki/Category:Flower_bouquets#/media/File:Bildtankstelle_1_028.jpg" />
    </li>
  </ul>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>