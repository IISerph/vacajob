<?php
/**
 * The template for displaying all single posts.
 *
 * @package Royal
 */

get_header(); ?>
<?php 
		$breadcrumb = get_theme_mod( 'breadcrumb',true );
		if( $breadcrumb ) : ?>
			<div class="breadcrumb-wrap">
				<div class="sixteen columns">
					<div class="breadcrumb">
						<?php royal_breadcrumbs(); ?>  
					</div>
				</div>
			</div>
		<?php endif; ?>

	<div id="primary" class="content-area eleven columns">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
