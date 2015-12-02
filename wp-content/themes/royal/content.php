<?php
/**
 * @package Royal
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
		$royal = get_theme_mods(); 
		if( ! isset($royal['featured_image']) && has_post_thumbnail() ) : ?>
			<div class="post-thumb">
				<?php the_post_thumbnail(); ?>
			</div>

		<?php else : 
				$featured_image = get_theme_mod( 'featured_image' );
			if( $featured_image && has_post_thumbnail() ) : ?>
		<div class="post-thumb">
			<?php the_post_thumbnail(); ?>   
		</div>			
		<?php 
		endif; 
	endif; ?>

	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<span class="date-structure posted-on">				
				<span class="dd-mm-yy"><i class="fa fa-calendar"></i><a href="<?php the_permalink(); ?>"><?php the_time('j M Y'); ?></a> </span>
			</span>
			<?php royal_author(); ?>
			<?php royal_comments_meta(); ?>
			<?php royal_edit(); ?> 
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rsaquo;</span>', 'royal' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

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
</article><!-- #post-## -->