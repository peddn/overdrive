<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package overdrive
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function overdrive_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'overdrive_jetpack_setup' );
