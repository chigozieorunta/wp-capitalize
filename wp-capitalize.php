<?php

/*
 * Plugin Name: WP Capitalize
 * Plugin URI: https://github.com/chigozieorunta/wp-capitalize
 * Description: A simple WordPress plugin designed to help you capitalize post titles, author names and others...
 * Version: 1.0
 * Author: Chigozie Orunta
 * Author URI: https://github.com/chigozieorunta
*/

//Define Plugin Path
define("WPCAPITALIZE", ABSPATH.'wp-content/plugins/wp-capitalize');

//Register Admin Menu
add_action('admin_menu', 'wp_capitalize_menu');
function wp_capitalize_menu() {
    add_menu_page( 'WP Capitalize', 'WP Capitalize', 'manage_options', 'wp-capitalize', 'wp_capitalize_init' );
}

//Custom Functions
require_once('wp-capitalize-functions.php');

//Add Options Page
function wp_capitalize_init() {
    require_once('wp-capitalize-html.php');
}

//Add Filter
add_filter('the_title', 'wp_capitalize_post_title' );
function wp_capitalize_post_title($title) {
	$title = '<span style="text-transform: capitalize; ">'.$title.'</span>';
	return $title;
}

?>