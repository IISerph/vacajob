<?php
/**
 * The main blog template file.
 *
 * This is the blog template file in a WordPress theme
 * It is used to display blog posts on front page.
 * When Reading settings is done so.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Royal
 */

get_header(); ?>
<?php if( is_front_page() ) : ?>
	<div id="content" class="site-content">
		<div class="container">
<?php endif; ?>

	<div id="primary" class="content-area eleven columns">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php royal_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
