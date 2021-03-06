<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package frshblumz
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
	        <div id="footer-widgets">
	            <?php if ( is_active_sidebar( 'footer' ) ) : ?>
	                <aside id="widget-foot" class="widget-foot">
	                    <?php dynamic_sidebar( 'footer' ); ?>
	                </aside>
	            <?php endif; ?>
	        </div><!-- end #footer-widgets -->

			<div id="footer-menu">
				<?php wp_nav_menu ( array('theme_location'=> 'secondary', 'menu_class' =>'foot-menu'));
				?> 
			</div><!--#footer-menu-->
<!--site info is displayed in the footer-->		
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'frshblumz' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'frshblumz' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'frshblumz' ), 'frshblumz', '<a href="http://google.ca" rel="designer">Team Panda JZ</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
