<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Royal
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'royal' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap">
			<div class="container">
			<?php if( is_active_sidebar( 'top-left' ) ) : ?>
				<div class="four columns">
					<div class="contact">
						<?php dynamic_sidebar('top-left' ); ?>
					</div>
				</div>
			<?php endif; ?>
			<div class="branding eight columns">
				<div class="site-branding">
				<?php 
					$logo_title = get_theme_mod( 'logo_title' );
					$logo = get_theme_mod( 'logo', '' );
					$tagline = get_theme_mod( 'tagline');
					if( $logo_title && $logo != '' ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url($logo) ?>" alt="<?php bloginfo( 'name' ); ?>"></a></h1>
					<?php else : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php endif; ?>
					<?php if( $tagline ) : ?>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					<?php endif; ?>
				</div>
			</div>			
			<?php if( is_active_sidebar('top-right' ) ) : ?>
				<div class="four columns">
					<div class="social">
						<?php dynamic_sidebar('top-right' ); ?>
					</div>
				</div>
			<?php endif; ?>
			</div>
		</div>
		<div class="nav-wrap">
			<div class="container">
				<nav id="site-navigation" class="main-navigation clearfix thirteen columns" role="navigation">
					<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'royal' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
				<div class="three columns">
					<div id="search">
						<?php get_search_form(); ?>
						<span class="search-box"><i class="fa fa-search"></i></span>
					</div>
				</div>
			</div>
		</div>			
	</header><!-- #masthead -->
	
<?php if( ! is_front_page() ) : ?>
	<div id="content" class="site-content">
		<div class="container">
<?php endif; ?>
