<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           V2V_Email_Handler
 *
 * @wordpress-plugin
 * Plugin Name:       V2V Email Handler
 * Plugin URI:        http://example.com/v2v_email_handler-uri/
 * Description:       Webinar Registration email backup
 * Version:           1.0.0
 * Author:            Your Name or Your Company
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       v2v_email_handler
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'V2V_EMAIL_HANDLER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-v2v_email_handler-activator.php
 */
function activate_v2v_email_handler() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-v2v_email_handler-activator.php';
	V2V_Email_Handler_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-v2v_email_handler-deactivator.php
 */
function deactivate_v2v_email_handler() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-v2v_email_handler-deactivator.php';
	V2V_Email_Handler_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_v2v_email_handler' );
register_deactivation_hook( __FILE__, 'deactivate_v2v_email_handler' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-v2v_email_handler.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_v2v_email_handler() {

	$plugin = new V2V_Email_Handler();
	$plugin->run();

}
run_v2v_email_handler();
