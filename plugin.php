<?php
/**
 * Plugin Name: Style My Prints
 * Plugin URI:  https://github.com/anandkumar/style-my-prints
 * Description: Allow user to print your blog posts in printer friendly version.
 * Version:     1.0.0
 * Author:      Anand Kumar
 * Author URI:  http://anandkumar.net
 * License:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: style-my-prints
 *
 * 
 *
 * @author Anand Kumar
 * @link   http://www.blogsynthesis.com/print-friendly-wordpress/
 * @link   http://www.blogsynthesis.com/plugins/style-my-prints/
 */
 
 
 
// Register style sheet.
add_action( 'wp_enqueue_scripts', 'register_print_styles' );

/**
 * Register style sheet.
 */
function register_print_styles() {
	wp_register_style( 'style-my-prints', plugins_url( 'css/print.css', __FILE__ ), array(), '1.0.0', 'print' ) ;
	wp_enqueue_style( 'style-my-prints' );
}