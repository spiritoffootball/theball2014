<?php
/**
 * The Ball 2014 Child Theme Functions
 *
 * Theme amendments and overrides.
 *
 * @package The_Ball_2014
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Set our version here.
define( 'THEBALL2014_VERSION', '2.0.0' );

/**
 * Load theme class if not yet loaded and return instance.
 *
 * @since 1.0.1
 *
 * @return SOF_The_Ball_2014_Theme $theme The theme instance.
 */
function sof_the_ball_2014_theme() {

	// Maybe instantiate theme class.
	static $theme;
	if ( ! isset( $theme ) ) {
		include get_stylesheet_directory() . '/includes/class-theme.php';
		$theme = new SOF_The_Ball_2014_Theme();
	}

	// --<
	return $theme;

}

// Init immediately.
sof_the_ball_2014_theme();
