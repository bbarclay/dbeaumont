<?php
/**
 * Neat functions and definitions
 *
 * @package dale_beaumont
 */

/**
 * Paths
 *
 * @since  1.0
 */
if ( !defined( 'DB_THEME_DIR' ) ){
    define('DB_THEME_DIR', ABSPATH . 'wp-content/themes/' . get_template());
}

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1000; /* pixels */
}
// Include Files
include( DB_THEME_DIR . '/inc/activate.php' );
include( DB_THEME_DIR . '/inc/setup.php' );
include( DB_THEME_DIR . '/inc/widgets.php' );
include( DB_THEME_DIR . '/inc/customizer.php' );
include( DB_THEME_DIR . '/inc/template-tags.php' );
//require_once( DB_THEME_DIR .'/partials/wp-bootstrap-navwalker.php'); // Register Custom Navigation Walker

// Actions and Filters
add_action( 'after_setup_theme', 'daleb_setup' );
add_action( 'wp_enqueue_scripts', 'daleb_scripts');
add_action( 'wp_enqueue_scripts', 'daleb_styles'); 
add_action( 'wp_enqueue_scripts', 'daleb_enqueue_comments_reply' );
add_action( 'widgets_init', 'daleb_register_widgets' );
add_action( 'customize_register', 'daleb_register_custiomizer_controls' );



// Shortcodes
