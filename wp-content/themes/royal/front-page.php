	<?php 
	if( 'posts' == get_option( 'show_on_front' ) ) {
	    include( get_home_template() );
	} else {
/**
 * The front page template file.
 *
 *
 * @package Royal
 */

get_header(); 

		$slider_category = get_theme_mod('slider_cat','');       
		$slider_count = get_theme_mod('slider_count',5);
		$slider_posts = array(
			'cat' => absint($slider_category) ,
			'posts_per_page' => absint($slider_count)
		);

		$query = new WP_Query($slider_posts);
		if( $query->have_posts()) : ?>
			<div class="flexslider">
				<ul class="slides">
		<?php while($query->have_posts()) :
				$query->the_post();
				if( has_post_thumbnail() ) : ?>
				    <li>
				    	<div class="flex-image">
				    		<?php the_post_thumbnail('full'); ?>
				    	</div>
				    	<div class="flex-caption">
				    		<?php the_content(); ?>
				    	</div>
				    </li>
				<?php endif; ?>
		<?php endwhile; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php  
		$query = null;
		wp_reset_postdata();
	?>
	<div id="content" class="site-content">
		<div class="container">		
	<div id="primary" class="content-area sixteen columns">
		<main id="main" class="site-main" role="main">

		<?php
			$service_1 = absint( get_theme_mod('service_1') );
			$service_2 = absint( get_theme_mod('service_2') );
			$service_3 = absint( get_theme_mod('service_3') );

		if( $service_1 && $service_2 && $service_3 ) {
			$service_pages = array($service_1,$service_2,$service_3);
			$args = array(
				'post_type' => 'page',
				'post__in' => $service_pages,
				'posts_per_page' => -1 
			);
		} else {
			$args = array(
				'post_type' => 'page',
				'posts_per_page' => 3
			);			
		}

		$query = new WP_Query($args);
		if( $query->have_posts()) : ?>
			<div class="services-wrapper">
		<?php while($query->have_posts()) :
				$query->the_post(); ?>
				    <div class="one-third column services">
				    	<?php the_title( '<h4>', '</h4>' ); ?>
				    	<?php if( has_post_thumbnail() ) : ?>
				    		<?php the_post_thumbnail('royal_service-thumbnail'); ?>
				    	<?php endif; ?>
				    	<?php the_content(); ?>
				    </div>
		<?php endwhile; ?>
		<br class="clear" />
			</div>
		<?php endif; ?>
		<?php  
			$query = null;
			wp_reset_postdata();
		?>
		
		<?php royal_recent_posts(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer(); 
}
?>