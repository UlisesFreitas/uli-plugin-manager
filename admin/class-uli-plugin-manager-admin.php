<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.ulisesfreitas.com
 * @since      1.0.0
 *
 * @package    Uli_Plugin_Manager
 * @subpackage Uli_Plugin_Manager/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Uli_Plugin_Manager
 * @subpackage Uli_Plugin_Manager/admin
 * @author     Ulises Freitas <ulises.freitas@gmail.com>
 */
class Uli_Plugin_Manager_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
        
        $this->load_dependencies();
        
        
	}

    /**
     * Register a custom menu page.
     */
    public function uli_plugin_manager_menu(){
        add_menu_page( 
            __( 'Install Plugins', 'uli-plugin-manager' ),
            'Uli Plugin Manager',
            'manage_options',
            'uli-plugin-manager-install-plugins',
            '',
            'dashicons-smiley',
            99
        ); 
    }

    
    /**
	 * Load the required dependencies for the Admin facing functionality.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Wppb_Demo_Plugin_Admin_Settings. Registers the admin settings and page.
	 *
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {}
    
    
	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Uli_Plugin_Manager_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Uli_Plugin_Manager_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/uli-plugin-manager-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Uli_Plugin_Manager_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Uli_Plugin_Manager_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/uli-plugin-manager-admin.js', array( 'jquery' ), $this->version, false );

	}

}
