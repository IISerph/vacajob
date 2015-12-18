<?php
/*
Plugin Name: Database config centrum
Plugin URI: http://example.com/wordpress-plugins/my-plugin
Description: This is a brief description of my plugin
Version: 1.0
Author: Nicolas Dubiez
Author URI: http://example.com
*/

register_activation_hook( __FILE__, "opmenu");

//create custom plugin settings menu
add_action('admin_menu', "create_menu");
add_action('admin_menu', "sub_menu");

function create_menu() {
//create nieuwe top-level menu
add_menu_page('Database config centrum', 'Database Settings','administrator', __FILE__, 'opmenu',
plugins_url('images/generic.png', __FILE__));}

function sub_menu() {
//create een submenu Footer phrase
add_submenu_page( __FILE__, 'Info about Settings Page', 'Info plugin','administrator', __FILE__.'_phrase_settings', 'admin_settings_phrase');}

//functie voor submenu
function admin_settings_phrase() {
     include('info_admin.php');
}

//functie voor menu
function opmenu() {	
//importeert file
	include('import_admin.php');	
	}
?>