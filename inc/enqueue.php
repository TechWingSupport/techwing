<?php
/**
 * Enqueue scripts
 *
 * @package tabularasa
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Enqueue scripts and styles.
 */
function tabularasa_scripts() {
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );
	
	$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css', array(), $css_version );

	wp_enqueue_style( 'tabularasa-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'tabularasa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'tabularasa-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/vendor/bootstrap.bundle.min.js' );
	wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/js/vendor/bootstrap.bundle.min.js', array(), $js_version, true );

	$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/app.js' );
	wp_enqueue_script( 'tabularasa-app', get_template_directory_uri() . '/js/app.js', array(), $js_version, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tabularasa_scripts' );