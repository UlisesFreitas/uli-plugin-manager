<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.ulisesfreitas.com
 * @since      1.0.0
 *
 * @package    Uli_Plugin_Manager
 * @subpackage Uli_Plugin_Manager/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Uli_Plugin_Manager
 * @subpackage Uli_Plugin_Manager/includes
 * @author     Ulises Freitas <ulises.freitas@gmail.com>
 */
class Uli_Plugin_Manager_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'uli-plugin-manager',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
