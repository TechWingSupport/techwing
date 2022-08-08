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

	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css' );

	wp_enqueue_style( 'tabularasa-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'tabularasa-navigation', get_template_directory_uri() . '/js/navigation.js' );

	wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/js/vendor/bootstrap.bundle.min.js' );

	wp_enqueue_script( 'tabularasa-app', get_template_directory_uri() . '/js/app.js' );

}
add_action( 'wp_enqueue_scripts', 'tabularasa_scripts' );