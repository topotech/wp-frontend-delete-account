<?php
/**
 * Plugin Name: WP Frontend Delete Account
 * Description: Lets customers delete their account by their own.
 * Version: 1.2.0
 * Author: Sanjeev Aryal
 * Author URI: http://www.sanjeebaryal.com.np
 * Text Domain: wp-frontend-delete-account
 * Domain Path: /languages/
 *
 * @package    WP Force Logout
 * @author     Sanjeev Aryal
 * @since      1.0.0
 * @license    GPL-3.0+
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Define WPFDA_PLUGIN_FILE.
if ( ! defined( 'WPFDA_PLUGIN_FILE' ) ) {
	define( 'WPFDA_PLUGIN_FILE', __FILE__ );
}

/**
 * Plugin version.
 *
 * @var string
 */
const WPFDA_VERSION = '1.2.0';

require_once 'vendor/autoload.php';

/**
 * Return the main instance of Main Class.
 *
 * @since  1.2.0
 *
 * @return Main.
 */
function wp_frontend_delete_account() {
		return \WP_Frontend_Delete_Account\Main::get_instance();
}

wp_frontend_delete_account();
