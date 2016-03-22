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
<?php
	if ( is_front_page() && is_home()) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
</div>
<?php
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
		//    wp_reset_query(); //resetting the page query

				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
					?>
				<div class="entry-content-page">
					<?php the_content(); ?> <!-- Page Content -->
				</div><!-- .entry-content-page -->
			<?php
				endwhile;
			?>


		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>

<?php
get_sidebar();
get_footer();
?>
