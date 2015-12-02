<?php 

/**
 * Enqueue scripts and styles.
 */
function royal_scripts() {
	wp_enqueue_style( 'royal-oswald', royal_theme_font_url('Oswald:400,700'), array(), 20141212 );
	wp_enqueue_style( 'royal-robota', royal_theme_font_url('Roboto:400,300,700,500'), array(), 20141212 );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), 20150224 );
	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), 20150224 );
	wp_enqueue_style( 'royal-style', get_stylesheet_uri() );

	wp_enqueue_script( 'royal-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'royal-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '2.4.0', true );
	wp_enqueue_script( 'royal-custom', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'royal_scripts' );

/**
 * Register Google fonts.
 *
 * @return string
 */
function royal_theme_font_url($font) {
	$font_url = '';
	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Font, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Font: on or off', 'royal' ) ) {
		$font_url = esc_url( add_query_arg( 'family', urlencode($font), "//fonts.googleapis.com/css" ) );
	}

	return $font_url;
}

function royal_admin_enqueue_scripts( $hook ) {
	if( strpos($hook, 'royal_upgrade') ) {
		wp_enqueue_style( 
			'royal-fa', 
			get_template_directory_uri() . '/css/font-awesome.min.css', 
			array(), 
			'4.3.0', 
			'all' 
		);
		wp_enqueue_style( 
			'royal-admin-css', 
			get_template_directory_uri() . '/admin/css/admin.css', 
			array(), 
			'1.0.0', 
			'all' 
		);
	}
}
add_action( 'admin_enqueue_scripts', 'royal_admin_enqueue_scripts' );