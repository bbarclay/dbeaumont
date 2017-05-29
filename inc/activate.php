<?php
/*
*  Compare Version, Add Theme Options
*/

if ( version_compare( get_bloginfo('version'), '3.6', '<' ) ) {

    function daleb_activate_theme() {
        switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
        unset( $_GET['activated'] );
        add_action( 'admin_notices', 'daleb_notice_version' ); 
    }
    add_action( 'after_switch_theme', 'daleb_activate_theme' );
}

function daleb_notice_version() {
    $update_message = sprintf( __( 'This theme requires WordPress version 3.6 or newer. You\'re currently using version %s. Please upgrade.', 'dale_beaumont' ), get_bloginfo('version') );
    printf( '<div class="error"><p>%s</p></div>', $update_message );
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}
