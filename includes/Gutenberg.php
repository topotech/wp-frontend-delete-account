<?php

namespace WP_Frontend_Delete_Account;

/**
 * @since  1.0.0
 *
 * @since 1.2.0, changed class name from WPFDA_Gutenberg_Block to Gutenberg with Namespace.
 *
 * Class for adding gutenberg block.
 *
 * @class Gutenberg
 */
class Gutenberg {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'register_block' ) );
		add_action( 'enqueue_block_editor_assets', array( $this, 'load_assets' ) );
	}

	/**
	 * Load assets on gutenberg area.
	 *
	 * @return void.
	 */
	public function load_assets() {
		wp_enqueue_script(
			'wpfda-gutenberg-block',
			plugins_url( 'assets/js/admin/gutenberg.min.js', WPFDA_PLUGIN_FILE ),
			array( 'wp-blocks', 'wp-editor' ),
			true
		);
	}

	/**
	 * Register gutenber block.
	 *
	 * @return Void.
	 */
	public function register_block() {

		if ( ! function_exists( 'register_block_type' ) ) {
			return;
		}

		register_block_type(
			'wp-frontend-delete-account/delete-account-content',
			array(
				'editor_script'   => 'wpfda-gutenberg-block',
				'render_callback' => 'wpf_delete_account_content',
			)
		);
	}
}

new \WP_Frontend_Delete_Account\Gutenberg();
