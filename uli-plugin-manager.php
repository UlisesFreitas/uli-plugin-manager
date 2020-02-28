<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.ulisesfreitas.com
 * @since             1.0.0
 * @package           Uli_Plugin_Manager
 *
 * @wordpress-plugin
 * Plugin Name:       Uli Plugin Manager
 * Plugin URI:        https://www.ulisesfreitas.com/uli-plugin-manager
 * Description:       One plugin to rule them all, Uli Plugin Manager is a plugin that present a list of recommended plugins of wordpress.org, to make your life easier for install.
 * Version:           1.0.0
 * Author:            Ulises Freitas
 * Author URI:        https://www.ulisesfreitas.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       uli-plugin-manager
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
define( 'ULI_PLUGIN_MANAGER_VERSION', '1.0.0' );
define( 'ULI_PLUGIN_MANAGER_PATH', plugin_dir_path( __FILE__ ) );
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-uli-plugin-manager-activator.php
 */
function activate_uli_plugin_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-uli-plugin-manager-activator.php';
	Uli_Plugin_Manager_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-uli-plugin-manager-deactivator.php
 */
function deactivate_uli_plugin_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-uli-plugin-manager-deactivator.php';
	Uli_Plugin_Manager_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_uli_plugin_manager' );
register_deactivation_hook( __FILE__, 'deactivate_uli_plugin_manager' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-uli-plugin-manager.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_uli_plugin_manager() {

	$plugin = new Uli_Plugin_Manager();
	$plugin->run();

}
run_uli_plugin_manager();
