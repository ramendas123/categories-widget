<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://healthythingy.com/
 * @since             1.0.0
 * @package           Healthy_Thingy_Post_Slides
 *
 * @wordpress-plugin
 * Plugin Name:       Categories Widget
 * Plugin URI:        https://abc.com/
 * Description:       This is a short description of what the plugin does. It's displayed in categories in widget area.
 * Version:           1.0.0
 * Author:            Juhita Pal
 * Author URI:        https://healthythingy.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       categories-widget
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CATEGORIES_WIDGET_DOMAIN', '1.3.1' );


/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
//require plugin_dir_path( __FILE__ ) . 'inc/class-categories-widget.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */

// function run_categories_widget() {

// 	$plugin = new Categories_Widget();
// 	$plugin->run();

// }
// run_categories_widget();

add_action('the_post','post_callback_func');
function post_callback_func(){
	die('dfgdfg');
}