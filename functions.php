<?php
/**
 * tabularasa functions and definitions
 *
 * @package tabularasa
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$tabularasa_includes = array(
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/custom-header.php',                 	// Implement the Custom Header feature.
	'/customizer.php',                      // Customizer additions.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/navigation.php',                      // Setup main navigation.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/template-functions.php',              // Functions which enhance the theme by hooking into WordPress.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/widgets.php',                         // Register widget area.
	'/app.php',    							// App scripts.
);

foreach ( $tabularasa_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}