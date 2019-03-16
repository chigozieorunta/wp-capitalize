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
        add_action('admin_menu', array(get_called_class(), 'registerMenu'));
    }

    /**
	 * Register Menu Method
	 *
     * @access private  
	 * @since  1.0.0
	 */
    public static function registerMenu() {
        add_menu_page(
            'wp-capitalize', 
            'wp-capitalize', 
            'manage_options', 
            'wp-capitalize', 
            array(get_called_class(), 'registerHTML')
        );
    }

    /**
	 * Register HTML Method
	 *
     * @access private
	 * @since  1.0.0
	 */
    public static function registerHTML() {
        require_once('wp-capitalize-html.php');
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