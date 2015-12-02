<?php
/**
 * @package Royal
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		$royal = get_theme_mods(); 
	if( ! isset($royal['single_featured_image']) && has_post_thumbnail() ) : ?>
		<div class="post-thumb">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php else : 
			$single_featured_image = get_theme_mod( 'single_featured_image' );
			if( $single_featured_image && has_post_thumbnail() ) : ?>
		<div class="post-thumb">
			<?php the_post_thumbnail(); ?>
		</div>			
		<?php 
			endif;  
		endif; ?>	
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<span class="date-structure posted-on">				
				<span class="dd-mm-yy"><i class="fa fa-calendar"></i><?php the_time('j M Y'); ?> </span>
			</span>
			<?php royal_author(); ?>
			<?php royal_comments_meta(); ?>
			<?php royal_edit(); ?> 
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages: ', 'royal' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php royal_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<?php royal_post_nav(); ?>
</article><!-- #post-## -->
