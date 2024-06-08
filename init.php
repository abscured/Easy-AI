<?php
/**
 * Initialise the plugin
 *
 * This file can use syntax from the required level of PHP or later.
 *
 * @package      Biha\Easy_AI
 * @author       Kasra Sabet
 * @copyright    2020 Gary Jones
 * @license      GPL-2.0-or-later
 */

declare( strict_types = 1 );

namespace Biha\Easy_AI;

use BrightNucleus\Config\ConfigFactory;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! defined( 'EASY_AI_DIR' ) ) {
	define( 'EASY_AI_DIR', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'EASY_AI_URL' ) ) {
	define( 'EASY_AI_URL', plugin_dir_url( __FILE__ ) );
}

// Load Composer autoloader.
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

// Initialize the plugin.
$GLOBALS['easy_ai'] = new Plugin( ConfigFactory::create( __DIR__ . '/config/defaults.php' )->getSubConfig( 'Biha\Easy_AI' ) );
$GLOBALS['easy_ai']->run();
