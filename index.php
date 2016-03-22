<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package frshblumz
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<div id="main" class="site-main" role="main">
	<div id="gridcontainer">
<?php 
	$counter = 1; //start counter
	$grids = 4; //Grids per row
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array('posts_per_page' => 8, 'paged' => $paged, 'cat'=>30 );
	
	query_posts( 'category_name=Markup&posts_per_page=8&paged=' . $paged ); 
	if(have_posts()) :  while(have_posts()) :  the_post();
?>
<?php
//Show the left hand side column
if($counter < $grids) :
?>
	<div class="griditemleft">
	<div class="postimage">
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('category-thumbnail'); ?></a>
	</div>
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	</div>
<?php
	//Show the right hand side column
	elseif($counter == $grids) :
?>
	<div class="griditemright">
		<div class="postimage">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('category-thumbnail'); ?></a>
		</div>
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		</div>
	<div class="clear"></div>
<?php
$counter = 0;
endif;
?>
<?php
$counter++;
endwhile; 
if($counter > 1) 
	echo '<div class="clear"></div>'
?>

<?php the_posts_pagination( $args ); ?>

<?php endif;
?>

		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				endwhile;
				// Previous/next post navigation.
			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );
			endif;
		?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
<?php
get_sidebar();
get_footer();
