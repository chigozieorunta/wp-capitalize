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

wpGutenbergBlocks::getInstance();

 /**
 * Class wp_gutenberg_blocks
 */
class wpGutenbergBlocks {
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
        wp_register_script(
            'wp_gutenberg_blocks',
            plugins_url('step-01/block.js', __FILE__),
            array('wp-blocks', 'wp-element')
        );
    }

    /**
	 * Register Block Type Method
	 *
     * @access private
	 * @since  1.0.0
	 */
    private static function registerBlockType() {
        register_block_type(
            'wp_gutenberg_blocks/hello-world-step-01', 
            array(
                'editor_script' => 'gutenberg-boilerplate-es5-step01',
            ) 
        );
    }

    /**
	 * Register Menu Method
	 *
     * @access private
	 * @since  1.0.0
	 */
    private static function registerMenu() {
        add_menu_page('wp_gutenberg_blocks', 'wp_gutenberg_blocks', 'manage_options', 'wp_gutenberg_blocks', 'self::registerHTML');
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