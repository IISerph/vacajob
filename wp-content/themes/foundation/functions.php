
<?php
//past functies toe
add_action('init', 'styleEnqueue');
add_action('init', 'foundationEnqueue');

//algemene style en script lader gevonden op wordpress site
// ----------------------------------------------------------------------------
// register and enqueue styles
// ----------------------------------------------------------------------------

function styleEnqueue() {
  if (!is_admin()) {


//wp_enqueue_style('css', get_template_directory_uri()."/style.css",array(),'','screen');
// enqueue foundation.min
wp_enqueue_style('css', get_template_directory_uri()."/css/foundation.min.css",array(),'5.1.1','screen');
// enqueue font icons
wp_enqueue_style('icons', get_template_directory_uri()."/css/foundation-icons.css",array(),'5.1.1','screen');
// enqueue theme styles
wp_enqueue_style('style', get_stylesheet_uri());
  }
}

// ----------------------------------------------------------------------------
// register and enqueue scripts
// ----------------------------------------------------------------------------

function foundationEnqueue() {
  if (!is_admin()) {

// deregister core jquery
wp_deregister_script('jquery');
// reregister jquery 2.1.0
wp_register_script('jquery', get_template_directory_uri()."/js/vendor/jquery.js", array(),'2.1.0',false);
// register modernizr
wp_register_script('modernizer', get_template_directory_uri()."/js/vendor/modernizr.js",array(jquery),'2.1.0', false);
// register foundation.min
wp_register_script('foundation', get_template_directory_uri()."/js/foundation.min.js", array('jquery'),'2.1.0',true); 

wp_enqueue_script(array('jquery','modernizer','foundation'));

  }
}

add_filter('excerpt_length', 'custom_excerpt_length');

//Theme setup
function wordPress_setup(){
//Navigation menus
register_nav_menus(array(
'home' => __( 'Home')));

//Customize excerpt woord link
function custom_excerpt_length(){
	return 25;
}

// Featured image support
add_theme_support('post-thumbnails');
add_image_size('small-thumbnail', 400, 300, true);
add_image_size('banner_image', 920, 210, true);
}

add_action('after_setup_theme', 'wordPress_setup');
?>