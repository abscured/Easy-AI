<?php
/**
 * Plugin configuration file
 *
 * @package      Gamajo\PluginSlug
 * @author       Gary Jones
 * @copyright    2017 Gamajo
 * @license      GPL-2.0+
 */

declare( strict_types = 1 );

namespace Gamajo\PluginSlug;

$plugin_slug_plugin = array(
	'textdomain'    => 'easy-ai',
	'languages_dir' => 'languages',
);

$plugin_slug_settings = array(
	'submenu_pages' => array(
		array(
			'parent_slug'  => 'options-general.php',
			'page_title'   => __( 'Easy AI Settings', 'easy-ai' ),
			'menu_title'   => __( 'Easy AI', 'easy-ai' ),
			'capability'   => 'manage_options',
			'menu_slug'    => 'easy-ai',
			'view'         => PLUGIN_SLUG_DIR . 'views/admin-page.php',
			'dependencies' => array(
				'styles'   => array(),
				'scripts'  => array(
					array(
						'handle'    => 'easy-ai-js',
						'src'       => PLUGIN_SLUG_URL . 'js/admin-page.js',
						'deps'      => array( 'jquery' ),
						'ver'       => '1.2.3',
						'in_footer' => true,
						'is_needed' => function ( $context ): bool {
							if ( $context ) {
								return false;
							}

							return true;
						},
						'localize'  => array(
							'name' => 'pluginSlugI18n',
							'data' => function ( $context ): array {
								return array(
									'test_localize_data' => 'test_localize_value',
									'context'            => $context,
								);
							},
						),
					),
				),
				'handlers' => array(
					'scripts' => 'BrightNucleus\Dependency\ScriptHandler',
					'styles'  => 'BrightNucleus\Dependency\StyleHandler',
				),
			),
		),
	),
	'settings'      => array(
		'setting1' => array(
			'option_group'      => 'pluginslug',
			'sanitize_callback' => null,
			'sections'          => array(
				'section1' => array(
					'title'  => __( 'My Section Title', 'easy-ai' ),
					'view'   => PLUGIN_SLUG_DIR . 'views/section1.php',
					'fields' => array(
						'field1' => array(
							'title' => __( 'My Field Title', 'easy-ai' ),
							'view'  => PLUGIN_SLUG_DIR . 'views/field1.php',
						),
					),
				),
			),
		),
	),
);

return array(
	'Gamajo' => array(
		'PluginSlug' => array(
			'Plugin'   => $plugin_slug_plugin,
			'Settings' => $plugin_slug_settings,
		),
	),
);
