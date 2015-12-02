<?php
/*
Plugin Name: My Special Blog Plugin
Plugin URI: http://example.com/wordpress-plugins/my-plugin
Description: This is a brief description of my plugin
Version: 1.0
Author: Nicolas Dubiez
Author URI: http://example.com
*/
?>
<?php // register_activation_hook(__FILE__,'extra_post_info_page'); //page 123?>

<?php
//page 134
// create custom plugin settings menu
add_action(’admin_menu’, ‘gmp_create_menu’);
function gmp_create_menu() {
//create new top-level menu
add_menu_page('MySpecialBlogPlugin Settings', 'GMP Settings',
'administrator', __FILE__, 'gmp_settings_page',
plugins_url('/images/wordpress.png', __FILE__));
//create three sub-menus: email, template, and general
add_submenu_page( __FILE__, 'Email Settings Page', 'Email',
'administrator', __FILE__.'_email_settings', 'gmp_settings_email');
add_submenu_page( __FILE__, 'Template Settings Page', 'Template',
'administrator', __FILE__.'_template_settings', 'gmp_settings_template');
add_submenu_page( __FILE__, 'General Settings Page', 'General',
'administrator', __FILE__.'_general_settings', 'gmp_settings_general');
}
?>
