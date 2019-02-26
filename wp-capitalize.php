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
define("WPCAPITALIZE", plugin_dir_url( __FILE__ ));

//Register Admin Menu
add_action('admin_menu', 'wp_capitalize_menu');
function wp_capitalize_menu() {
    add_menu_page('WP Capitalize', 'WP Capitalize', 'manage_options', 'wp-capitalize', 'wp_capitalize_init');
}

//CSS styling
add_action('admin_enqueue_scripts', 'wp_capitalize_styles');
function wp_capitalize_styles() {
    /*wp_register_style('bootstrap', WPCAPITALIZE.'css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');
    wp_register_style('bootstrap-spacer', WPCAPITALIZE.'css/bootstrap-spacer.min.css');
    wp_enqueue_style('bootstrap-spacer');*/
    wp_register_style('wp_capitalize_style', WPCAPITALIZE.'css/wp-capitalize.css');
    wp_enqueue_style('wp_capitalize_style');
}

//JS Scripting
add_action('admin_enqueue_scripts', 'wp_capitalize_scripts');
function wp_capitalize_scripts() {
    wp_register_script('wp_capitalize_script', WPCAPITALIZE.'js/wp-capitalize.js', array('jquery'), '1', true);
    wp_enqueue_script('wp_capitalize_script');
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