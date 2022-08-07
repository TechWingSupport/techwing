<?php
/**
 * Setup nav
 *
 * @package tabularasa
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function setup_nav() {
	wp_nav_menu( array(
            'menu'            => 'main',
            'theme_location'  => 'primary',
            'container'       => 'div',
            'container_id'    => 'navbarCollapse',
            'container_class' => 'collapse navbar-collapse',
            'menu_id'         => false,
            'menu_class'      => 'navbar-nav mr-auto',
            'depth'           => 0,
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker())
	);
}