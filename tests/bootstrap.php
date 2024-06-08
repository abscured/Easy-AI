<?php
/**
 * PHPUnit bootstrap
 *
 * @package      Gamajo\PluginSlug\Tests
 * @author       Gary Jones
 * @copyright    2017 Gamajo
 * @license      GPL-2.0+
 */

declare( strict_types = 1 );

namespace Easy_AI\Tests;

// Check for a `--testsuite integration` arg when calling phpunit, and use it to conditionally load up WordPress.
$easy_ai_argv = $GLOBALS['argv'];
$easy_ai_key  = (int) array_search( '--testsuite', $easy_ai_argv, true );

if ( $easy_ai_key && 'integration' === $easy_ai_argv[ $easy_ai_key + 1 ] ) {
	$easy_ai_tests_dir = getenv( 'WP_TESTS_DIR' );

	if ( ! $easy_ai_tests_dir ) {
		$easy_ai_tests_dir = '/tmp/wordpress-tests-lib';
	}

	// Give access to tests_add_filter() function.
	require_once $easy_ai_tests_dir . '/includes/functions.php';

	/**
	 * Manually load the plugin being tested.
	 */
	\tests_add_filter(
		'muplugins_loaded',
		function () {
			require dirname( __DIR__ ) . '/easy-ai.php';
		}
	);

	// Start up the WP testing environment.
	require $easy_ai_tests_dir . '/includes/bootstrap.php';
}
