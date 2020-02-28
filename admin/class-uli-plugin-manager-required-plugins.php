<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.ulisesfreitas.com
 * @since      1.0.0
 *
 * @package    Uli_Plugin_Manager_Required_Plugins
 * @subpackage Uli_Plugin_Manager/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Uli_Plugin_Manager_Required_Plugins
 * @subpackage Uli_Plugin_Manager/admin
 * @author     Ulises Freitas <ulises.freitas@gmail.com>
 */
class Uli_Plugin_Manager_Required_Plugins {

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
	private function load_dependencies() {

        if ( ! class_exists( 'TGM_Plugin_Activation' ) ) {
            require_once ULI_PLUGIN_MANAGER_PATH . 'vendor/tgmpa/class-tgm-plugin-activation.php';
        }
	}


    /**
     * Register the required plugins for this theme.
     *
     * In this example, we register five plugins:
     * - one included with the TGMPA library
     * - two from an external source, one from an arbitrary source, one from a GitHub repository
     * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
     *
     * The variables passed to the `tgmpa()` function should be:
     * - an array of plugin arrays;
     * - optionally a configuration array.
     * If you are not changing anything in the configuration array, you can remove the array and remove the
     * variable from the function call: `tgmpa( $plugins );`.
     * In that case, the TGMPA default settings will be used.
     *
     * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
     */
    public function uli_plugin_manager_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(


		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		
        array(
			'name'      => 'Autoptimize',
			'slug'      => 'autoptimize',
			'required'  => false,
		),
        array(
			'name'      => 'Auto clear Autoptimize',
			'slug'      => 'autoclear-autoptimize-cache',
			'required'  => false,
		),
        array(
			'name'      => 'Autoptimize',
			'slug'      => 'autoptimize',
			'required'  => false,
		),
        
        array(
			'name'      => 'BJ lazyload',
			'slug'      => 'bj-lazy-load',
			'required'  => false,
		),
        array(
			'name'      => 'Broken Link Checker',
			'slug'      => 'broken-link-checker',
			'required'  => false,
		),
        array(
			'name'      => 'Fast velocity minify',
			'slug'      => 'fast-velocity-minify',
			'required'  => false,
		),
        
        array(
			'name'      => 'OMG Fonts',
			'slug'      => 'host-webfonts-local',
			'required'  => false,
		),
        
        array(
			'name'      => 'Really Simple SSL',
			'slug'      => 'really-simple-ssl',
			'required'  => false,
		),
        
        array(
			'name'      => 'Resmushit image optimizer',
			'slug'      => 'resmushit-image-optimizer',
			'required'  => false,
		),
        
        array(
			'name'      => 'WhatsApp',
			'slug'      => 'creame-whatsapp-me',
			'required'  => false,
		),
        
        array(
			'name'      => 'WP GDPR Cookies',
			'slug'      => 'wp-gdpr-compliance',
			'required'  => false,
		),
        
        array(
			'name'      => 'WP Sitemap Page',
			'slug'      => 'wp-sitemap-page',
			'required'  => false,
		),
        array(
			'name'      => 'WP Super Cache',
			'slug'      => 'wp-super-cache',
			'required'  => false,
		),
        
        array(
			'name'      => 'WP Optimize',
			'slug'      => 'wp-optimize',
			'required'  => false,
		),
        array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
        array(
			'name'      => 'Caldera Forms',
			'slug'      => 'caldera-forms',
			'required'  => false,
		),
        array(
			'name'      => 'Classic Editor',
			'slug'      => 'classic-editor',
			'required'  => false,
		),
        array(
			'name'      => 'Easy Table Of Content - TOC',
			'slug'      => 'easy-table-of-contents',
			'required'  => false,
		),
        array(
			'name'      => 'Regenerate Thumbnails',
			'slug'      => 'regenerate-thumbnails',
			'required'  => false,
		),
        
		array(
			'name'        => 'SEO Yoast',
			'slug'        => 'wordpress-seo',
			'required'  => false,
		),
        
        array(
			'name'        => 'Query Monitor',
			'slug'        => 'query-monitor',
			'required'  => false,
		),
        array(
			'name'        => 'Contact form 7 redirection',
			'slug'        => 'wpcf7-redirect',
			'required'  => false,
		),
        array(
			'name'        => 'WP Force SSL',
			'slug'        => 'wp-force-ssl',
			'required'  => false,
		),
        array(
			'name'        => 'Post Duplicator',
			'slug'        => 'post-duplicator',
			'required'  => false,
		),
        array(
			'name'        => 'Woocommerce',
			'slug'        => 'woocommerce',
			'required'  => false,
		),
        array(
			'name'        => 'Elementor',
			'slug'        => 'elementor',
			'required'  => false,
		),
        array(
			'name'        => 'Bold Builder',
			'slug'        => 'bold-page-builder',
			'required'  => false,
		),
        array(
			'name'        => 'User role Editor',
			'slug'        => 'user-role-editor',
			'required'  => false,
		),
        array(
			'name'        => 'W3 Total Cache',
			'slug'        => 'w3-total-cache',
			'required'  => false,
		),
        array(
			'name'        => 'PopUp Maker',
			'slug'        => 'popup-maker',
			'required'  => false,
		),
        array(
			'name'        => 'Shortcodes Ultimate',
			'slug'        => 'shortcodes-ultimate',
			'required'  => false,
		),
        array(
			'name'        => 'Disable Comments',
			'slug'        => 'disable-comments',
			'required'  => false,
		),
        array(
			'name'        => 'Comming Soon, Maintenance',
			'slug'        => 'coming-soon',
			'required'  => false,
		),
        array(
			'name'        => 'Loco Translate',
			'slug'        => 'loco-translate',
			'required'  => false,
		),
        array(
			'name'        => 'SEO for Woocommerce',
			'slug'        => 'seo-for-woocommerce',
			'required'  => false,
		),
        array(
			'name'        => 'WP Reset',
			'slug'        => 'wp-reset',
			'required'  => false,
		),
        array(
			'name'        => 'iThemes WP Security',
			'slug'        => 'better-wp-security',
			'required'  => false,
		),
        array(
			'name'        => 'The Events Calendar',
			'slug'        => 'the-events-calendar',
			'required'  => false,
		),
        array(
			'name'        => 'Woocommerce Booster',
			'slug'        => 'woocommerce-jetpack',
			'required'  => false,
		),
        array(
			'name'        => 'Woocommerce pdf invoices',
			'slug'        => 'woocommerce-pdf-invoices-packing-slips',
			'required'  => false,
		),
        array(
			'name'        => 'Woocommerce Stripe',
			'slug'        => 'woo-stripe-payment',
			'required'  => false,
		),
        array(
			'name'        => 'YITH - Woocommerce Catalog',
			'slug'        => 'yith-woocommerce-catalog-mode',
			'required'  => false,
		),
        array(
			'name'        => 'Theme Check',
			'slug'        => 'theme-check',
			'required'  => false,
		),
        array(
			'name'        => 'Wordpress Importer',
			'slug'        => 'wordpress-importer',
			'required'  => false,
		),
        array(
			'name'        => 'Widget Importer & Exporter',
			'slug'        => 'widget-importer-exporter',
			'required'  => false,
		),
        array(
			'name'        => 'WPS Menu Exporter',
			'slug'        => 'wps-menu-exporter',
			'required'  => false,
		),
        array(
			'name'        => 'One click demo import',
			'slug'        => 'one-click-demo-import',
			'required'  => false,
		),
        array(
			'name'        => 'Easy Digital Downloads',
			'slug'        => 'easy-digital-downloads',
			'required'  => false,
		),
        array(
			'name'        => 'Export Featured Images',
			'slug'        => 'export-featured-images',
			'required'  => false,
		),
        array(
			'name'        => 'Jetpack by WordPress.com',
			'slug'        => 'jetpack',
			'required'  => false,
		),
        array(
			'name'        => 'Akismet',
			'slug'        => 'akismet',
			'required'  => false,
		),
        array(
			'name'        => 'Bbpress',
			'slug'        => 'bbpress',
			'required'  => false,
		),
        
        
        
        
        

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'uli-plugin-manager',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'uli-plugin-manager-install-plugins', // Menu slug.
		'parent_slug'  => 'plugins.php',//'plugins.php',            // Parent menu slug.
		'capability'   => 'manage_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => false,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => __('have fun!','uli-plugin-manager'),                      // Message to output right before the plugins table.

		
		'strings'      => array(
			'page_title'                      => __( 'Uli Plugin Manager', 'uli-plugin-manager' ),
			'menu_title'                      => __( 'Uli Plugin Manager', 'uli-plugin-manager' ),
			// translators: %s: plugin name.
			'installing'                      => __( 'Installing Plugin: %s', 'uli-plugin-manager' ),
			//translators: %s: plugin name.
			'updating'                        => __( 'Updating Plugin: %s', 'uli-plugin-manager' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'uli-plugin-manager' ),
			'notice_can_install_required'     => _n_noop(
				// translators: 1: plugin name(s).
				'Uli Plugin Manager requires the following plugin: %1$s.',
				'Uli Plugin Manager requires the following plugins: %1$s.',
				'uli-plugin-manager'
			),
			'notice_can_install_recommended'  => _n_noop(
				// translators: 1: plugin name(s).
				'Uli Plugin Manager recommends the following plugin: %1$s.',
				'Uli Plugin Manager recommends the following plugins: %1$s.',
				'uli-plugin-manager'
			),
			'notice_ask_to_update'            => _n_noop(
				//translators: 1: plugin name(s).
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'uli-plugin-manager'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				//translators: 1: plugin name(s).
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'uli-plugin-manager'
			),
			'notice_can_activate_required'    => _n_noop(
				//translators: 1: plugin name(s).
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'uli-plugin-manager'
			),
			'notice_can_activate_recommended' => _n_noop(
				// translators: 1: plugin name(s).
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'uli-plugin-manager'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'uli-plugin-manager'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'uli-plugin-manager'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'uli-plugin-manager'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'uli-plugin-manager' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'uli-plugin-manager' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'uli-plugin-manager' ),
			//translators: 1: plugin name.
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'uli-plugin-manager' ),
			//translators: 1: plugin name.
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'uli-plugin-manager' ),
			//translators: 1: dashboard link.
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'uli-plugin-manager' ),
			'dismiss'                         => __( 'Dismiss this notice', 'uli-plugin-manager' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'uli-plugin-manager' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'uli-plugin-manager' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
		
	);

	tgmpa( $plugins, $config );
}
    
}
