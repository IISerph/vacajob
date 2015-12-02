<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Royal
 */
?>
		</div> <!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php 
			$footer_widgets = get_theme_mod( 'footer_widgets' );
			if( $footer_widgets ) : ?>
			<div class="footer-widgets">
				<div class="container">   
					<?php get_template_part('footer','widgets'); ?>   
				</div>
			</div>
		<?php endif; ?>
		<div class="footer-bottom site-info">
			<div class="container">
				<div class="copyright eight columns">
					<?php 
						printf( __('<p>Powered by <a href="%1$s">%2$s</a>', 'royal'),
							esc_url( __( 'http://wordpress.org/', 'royal' ) ), __( 'WordPress','royal') );
						printf( '<span> . </span>' );
						printf( __( 'Theme: %1$s by %2$s', 'royal' ), 'Royal', '<a href="http://www.webulousthemes.com/" rel="designer">Webulous Themes</a></p>' );
					?>
				</div>
				<div class="footer-right eight columns">
					<?php dynamic_sidebar( 'footer-nav' ); ?>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
