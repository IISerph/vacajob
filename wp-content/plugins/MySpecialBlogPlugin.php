<?php
/*
Plugin Name: Test
Plugin URI: http://example.com/wordpress-plugins/my-plugin
Description: This is a brief description of my plugin
Version: 1.0
Author: Nicolas Dubiez
Author URI: http://example.com
*/

register_activation_hook( __FILE__, "testfun");

function testfun() {}

//create custom plugin settings menu
add_action('admin_menu', "msbp_create_menu");
function msbp_create_menu() {
//create new top-level menu
add_menu_page('SpecialBlog Settings', 'SpecialBlog Settings','administrator', __FILE__, 'msbp_settings_page',
plugins_url('/images/wordpress.png', __FILE__));
//create three sub-menus: email, template, and general
add_submenu_page( __FILE__, 'Email Settings Page', 'Email','administrator', __FILE__.'_email_settings', 'msbp_settings_email');
add_submenu_page( __FILE__, 'Template Settings Page', 'Template','administrator', __FILE__.'_template_settings', 'msbp_settings_template');
add_submenu_page( __FILE__, 'General Settings Page', 'General','administrator', __FILE__.'_general_settings', 'msbp_settings_general');
}
?>