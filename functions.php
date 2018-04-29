<?php /*
================================================================================
The Ball 2014 Child Theme Functions
================================================================================
AUTHOR: Christian Wach <needle@haystack.co.uk>
--------------------------------------------------------------------------------
NOTES

Theme amendments and overrides.

--------------------------------------------------------------------------------
*/



// set our version here
define( 'THEBALL2014_VERSION', '1.0.1' );



/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since 1.0
 */
if ( !isset( $content_width ) ) { $content_width = 660; }



/**
 * Augment the Base Theme's setup function.
 *
 * @since 1.0
 */
function theball2014_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be added to the /languages/ directory of the child theme.
	 */
	load_theme_textdomain(
		'theball2014',
		get_stylesheet_directory() . '/languages'
	);

}

// add after theme setup hook
add_action( 'after_setup_theme', 'theball2014_setup' );



/**
 * Add child theme's CSS file(s).
 *
 * @since 1.0
 */
function theball2014_enqueue_styles() {

	// enqueue file
	wp_enqueue_style(
		'theball2014_css',
		get_stylesheet_directory_uri() . '/assets/css/style-overrides.css',
		array( 'theball_screen_css' ),
		THEBALL2014_VERSION, // version
		'all' // media
	);

}

// add a filter for the above
add_filter( 'wp_enqueue_scripts', 'theball2014_enqueue_styles', 105 );



/**
 * Override image of The Ball.
 *
 * @since 1.0
 *
 * @param str $default The existing markup for the image file.
 * @return str $default The modified markup for the image file.
 */
function theball2014_theball_image( $default ) {

	// ignore default and set our own
	return '<a href="' . get_option( 'home' ) . '" title="' . __( 'Home', 'theball2014' ) . '" class="ball_image">' .
			'<img src="' . get_stylesheet_directory_uri() . '/assets/images/interface/the_ball_2014.png" ' .
				 'alt="' . esc_attr( __( 'The Ball 2014', 'theball2014' ) ) . '" ' .
				 'title="' . esc_attr( __( 'The Ball 2014', 'theball2014' ) ) . '" ' .
				 'style="width: 100px; height: 100px;" ' .
				 'id="the_ball_header" />' .
			'</a>' ;

}

// add a filter for the above
add_filter( 'theball_image', 'theball2014_theball_image', 10, 1 );



/**
 * Override page list template file.
 *
 * @since 1.0
 *
 * @param str $default The default path to the template file.
 * @return str $default The modified path to the template file.
 */
function theball2014_pagelist( $default ) {

	// return out theme's page list file
	return get_stylesheet_directory() . '/assets/includes/page_list.php';

}

// add a filter for the above
add_filter( 'theball_pagelist', 'theball2014_pagelist', 10, 1 );



/**
 * Override supporters footer template file.
 *
 * @since 1.0
 *
 * @param str $default The default path to the template file.
 * @return str $default The modified path to the template file.
 */
function theball2014_supporters_file( $default ) {

	// pass for 2014 (it's the same as the main site)
	return $default;

}

// add a filter for the above
add_filter( 'theball_supporters', 'theball2014_supporters_file', 10, 1 );



