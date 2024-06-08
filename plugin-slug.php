<?php
/**
 * Plugin Name
 *
 * This file should only use syntax available in PHP 5.6 or later.
 *
 * @package      Gamajo\PluginSlug
 * @author       Gary Jones
 * @copyright    2020 Gamajo
 * @license      GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Easy AI
 * Plugin URI:        https://github.com/garyjones/...
 * Description:       ...
 * Version:           0.1.0
 * Author:            Gary Jones
 * Author URI:        https://garyjones.io
 * Text Domain:       easy-ai
 * License:           GPL-2.0-or-later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/garyjones/...
 * Requires PHP:      7.4
 * Requires WP:       5.3
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( version_compare( PHP_VERSION, '7.4', '<' ) ) {
	add_action( 'plugins_loaded', 'easy_ai_init_deactivation' );

	/**
	 * Initialise deactivation functions.
	 */
	function easy_ai_init_deactivation() {
		if ( current_user_can( 'activate_plugins' ) ) {
			add_action( 'admin_init', 'easy_ai_deactivate' );
			add_action( 'admin_notices', 'easy_ai_deactivation_notice' );
		}
	}

	/**
	 * Deactivate the plugin.
	 */
	function easy_ai_deactivate() {
		deactivate_plugins( plugin_basename( __FILE__ ) );
	}

	/**
	 * Show deactivation admin notice.
	 */
	function easy_ai_deactivation_notice() {
		$notice = sprintf(
			// Translators: 1: Required PHP version, 2: Current PHP version.
			'<strong>Easy AI</strong> requires PHP %1$s to run. This site uses %2$s, so the plugin has been <strong>deactivated</strong>.',
			'7.1',
			PHP_VERSION
		);
		?>
		<div class="updated"><p><?php echo wp_kses_post( $notice ); ?></p></div>
		<?php
		// phpcs:ignore WordPress.Security.NonceVerification.Recommended -- not using value, only checking if it is set.
		if ( isset( $_GET['activate'] ) ) {
			// phpcs:ignore WordPress.Security.NonceVerification.Recommended -- not using value, only checking if it is set.
			unset( $_GET['activate'] );
		}
	}

	return false;
}

/**
 * Load plugin initialisation file.
 */
require plugin_dir_path( __FILE__ ) . '/init.php';
