<?php
/**
 * The Ball 2014 Child Theme Class.
 *
 * @since 1.0.0
 * @package The_Ball_2014
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * The Ball 2014 Theme Class.
 *
 * A class that encapsulates this theme's functionality.
 *
 * @since 1.0.1
 */
class SOF_The_Ball_2014_Theme {

	/**
	 * Initialises this object.
	 *
	 * @since 1.0.1
	 */
	public function __construct() {

		// Listen for parent theme class to be loaded.
		add_action( 'sof/theme/the_ball/loaded', [ $this, 'initialise' ] );

	}

	/**
	 * Include files.
	 *
	 * @since 1.0.0
	 */
	public function initialise() {

		// Include files.
		$this->include_files();

		// Set up objects and references.
		$this->setup_objects();

		// Register hooks.
		$this->register_hooks();

		/**
		 * Broadcast that this instance is loaded.
		 *
		 * @since 1.0.1
		 */
		do_action( 'sof/theme/the_ball_2014/loaded' );

	}

	/**
	 * Include files.
	 *
	 * @since 1.0.1
	 */
	public function include_files() {

		// Only do this once.
		static $done;
		if ( isset( $done ) && $done === true ) {
			return;
		}

		// Include global scope Theme Functions.
		//include get_template_directory() . '/includes/functions-theme.php';

		// We're done.
		$done = true;

	}

	/**
	 * Set up this plugin's objects.
	 *
	 * @since 1.0.1
	 */
	public function setup_objects() {

		// Only do this once.
		static $done;
		if ( isset( $done ) && $done === true ) {
			return;
		}

		// We're done.
		$done = true;

	}

	/**
	 * Register WordPress hooks.
	 *
	 * @since 1.0.1
	 */
	public function register_hooks() {

		// Set up this theme's defaults.
		add_action( 'after_setup_theme', [ $this, 'theme_setup' ] );

		// Add CSS and JS with high priority so they are late in the queue.
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_styles' ], 1005 );

		// Filter the image of The Ball.
		add_filter( 'theball_image', [ $this, 'theball_image_filter' ] );

		// Filter the Supporters file.
		add_filter( 'theball_supporters', [ $this, 'supporters_file_filter' ] );

		// Filter the Team Members array.
		add_filter( 'theball_team_members', [ $this, 'team_members_filter' ] );

	}

	/**
	 * Augment the Base Theme's setup function.
	 *
	 * @since 1.0.1
	 */
	public function theme_setup() {

		/*
		 * Make theme available for translation.
		 * Translations can be added to the /languages/ directory of the child theme.
		 */
		load_child_theme_textdomain(
			'theball2014',
			get_stylesheet_directory() . '/languages'
		);

	}

	/**
	 * Add child theme's CSS file(s).
	 *
	 * @since 1.0.1
	 */
	public function enqueue_styles() {

		// Enqueue file.
		wp_enqueue_style(
			'theball2014_css',
			get_stylesheet_directory_uri() . '/assets/css/style-overrides.css',
			[ 'theball_screen_css' ],
			THEBALL2014_VERSION, // Version.
			'all' // Media.
		);

	}

	/**
	 * Override image of The Ball.
	 *
	 * @since 1.0.1
	 *
	 * @param str $default The existing markup for the image file.
	 * @return str $default The modified markup for the image file.
	 */
	public function theball_image_filter( $default ) {

		// Ignore default and set our own.
		return '<a href="' . get_home_url( null, '/' ) . '" title="' . __( 'Home', 'theball2014' ) . '" class="ball_image">' .
				'<img src="' . get_stylesheet_directory_uri() . '/assets/images/interface/the_ball_2014.png" ' .
					'alt="' . esc_attr( __( 'The Ball 2014', 'theball2014' ) ) . '" ' .
					'title="' . esc_attr( __( 'The Ball 2014', 'theball2014' ) ) . '" ' .
					'style="width: 100px; height: 100px;" ' .
					'id="the_ball_header" />' .
				'</a>';

	}

	/**
	 * Override supporters footer template file.
	 *
	 * @since 1.0.1
	 *
	 * @param str $default The default path to the template file.
	 * @return str $default The modified path to the template file.
	 */
	public function supporters_file_filter( $default ) {

		// Pass for 2014 - it's the same as the main site.
		return $default;

	}

	/**
	 * Override users in "Team" template file.
	 *
	 * @since 1.0.1
	 *
	 * @param array $default The default set of users.
	 * @return array $users The modified set of users.
	 */
	public function team_members_filter( $default ) {

		// 2014 users.
		return [ 3, 5, 8, 7, 2, 4 ];

	}

}
