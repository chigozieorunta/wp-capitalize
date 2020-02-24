<?php
/*
 * Filename:      wp-capitalize.php
 * Plugin Name:   wp-capitalize
 * Plugin URI:    https://github.com/chigozieorunta/wp-capitalize
 * Description:   A simple WordPress plugin designed to help you capitalize post titles, author names and others...
 * Domain Path:   ./
 * Description:   The function - wpCapitalize
 * Author:        Chigozie Orunta
 * Version:       1.0.0
 * Licence:       MIT
 * Author URI:    https://github.com/chigozieorunta
 * Last Change:   2019/03/13
*/

add_filter('the_title', 'wpCapitalize', 10, 2);
function wpCapitalize($title) {
    return ucwords($title);
}

?>