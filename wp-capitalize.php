<?php
/*
 * Filename:      wp-capitalize.php
 * Plugin Name:   wp-capitalize
 * Plugin URI:    https://github.com/chigozieorunta/wp-capitalize
 * Description:   A simple WordPress plugin designed to help you capitalize post titles, author names and others...
 * Domain Path:   ./
 * Description:   The parent class - wpCapitalize
 * Author:        Chigozie Orunta
 * Version:       1.0.0
 * Licence:       MIT
 * Author URI:    https://github.com/chigozieorunta
 * Last Change:   2019/03/13
*/

//Define Plugin Path
define("WPCAPITALIZE", plugin_dir_url( __FILE__ ));

//Register Admin Menu

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

wpCapitalize::getInstance();

 /**
 * Class wpCapitalize
 */
class wpCapitalize {
    /**
	 * Private static variables
	 *
	 * @var string
	 */
    private static $pluginName;

    /**
	 * Constructor
	 *
	 * @since  1.0.0
	 */
    public function __construct() {
        add_action('init', 'wp_gutenberg_blocks_init');
        add_action('admin_menu', 'self::registerMenu');
        add_action(
            'admin_enqueue_scripts', 
            'self::registerScript'
        );
    }

    /**
	 * Init Method
	 *
     * @access private
	 * @since  1.0.0
	 */
    private static function wp_gutenberg_blocks_init() {
        self::registerScript();
        self::registerBlockType();
    }

    /**
	 * Register Script Method
	 *
     * @access private
	 * @since  1.0.0
	 */
    private static function registerScript() {
        wp_register_style(
            'wp-capitalize-style', 
            plugins_url('css/wp-capitalize.css', __FILE__)
        );
        wp_register_script(
            'wp-capitalize-script', 
            plugins_url('js/wp-capitalize.js', __FILE__),
            array('jquery'), '1', true
        );
        wp_enqueue_style('wp-capitalize-style');
        wp_enqueue_script('wp-capitalize-script');
    }

    /**
	 * Register Menu Method
	 *
     * @access private  
	 * @since  1.0.0
	 */
    private static function registerMenu() {
        add_menu_page(
            'wp-capitalize', 'wp-capitalize', 
            'manage_options', 'wp-capitalize', 
            'self::registerHTML'
        );
    }

    /**
	 * Register HTML Method
	 *
     * @access private
	 * @since  1.0.0
	 */
    private static function registerHTML() {
        require_once('wp-gutenberg-blocks-html.php');
    }

    /**
	 * Points the class, singleton.
	 *
	 * @access public
	 * @since  1.0.0
	 */
    public static function getInstance() {
        static $instance;
        if($instance === null) $instance = new self();
        return $instance;
    }
}

?>