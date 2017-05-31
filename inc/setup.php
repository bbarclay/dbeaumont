<?php

if ( ! function_exists( 'daleb_setup' ) ) :

	function daleb_setup() {


		// This theme supports the Jetpack site logo.
		add_theme_support( 'site-logo' );

		// Enable support for Post Thumbnails, and declare a size.
		add_theme_support( 'post-thumbnails' );

		//set_post_thumbnail_size( 780, 350, true );
        add_image_size( 'banner', 1920, 360 );

		// This theme supports the title tag.
		add_theme_support( 'title-tag' );


		register_nav_menus( array(
			'navbar' => esc_html__( 'Top Menu', 'dale_beaumont' ),
			'footer' => esc_html__( 'Footer Menu', 'dale_beaumont' ),
            'social' => esc_html__( 'Social Media Menu', 'dale_beaumont' ),
			'fine'   => esc_html__( 'fine', 'dale_beaumont' ),
		) );



		add_theme_support( 'html5', array(
			'search-form', 
			'comment-form', 
			'comment-list', 
			'gallery', 
			'caption',
		) );


		add_theme_support( 'custom-background', apply_filters( 'neat_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add excerpt support to pages
		add_post_type_support( 'page', 'excerpt' );
	}
endif; 


function daleb_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {


    	//wp_enqueue_script('jquery'); // Enqueue it!
        //wp_deregister_script('jquery'); // Deregister WordPress jQuery
        //wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array(), '1.11.2');


        /**
         *
         * Minified and concatenated scripts
         *
         *     @vendors     plugins.min,js
         *     @custom      scripts.min.js
         *
         *     Order is important
         *
         */
        //wp_deregister_script('jquery');
		//wp_deregister_script('jquery-migrate');
        //wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '', true); // Enqueue it!
        //wp_enqueue_script('jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.0.0.js', array('jquery'), '', true); // Enqueue it!

        //wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '', true); // Enqueue it!
        wp_register_script('dbvendorsJs', get_template_directory_uri() . '/assets/js/vendors.min.js', array(), '1.0', true); // Custom scripts
        wp_enqueue_script('dbvendorsJs'); // Enqueue it!

        wp_register_script('dbcustomJs', get_template_directory_uri() . '/assets/js/custom.min.js', array(), '1.0', true); // Custom scripts
        wp_enqueue_script('dbcustomJs'); // Enqueue it!

    }

}

function daleb_styles()
{

    /**
     *
     * Minified and Concatenated styles
     *
     */
    //wp_register_style('aa_style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_register_style('daleb_style', get_template_directory_uri() . '/style.min.css', array(), '1.0', 'all');
    wp_enqueue_style('daleb_style'); // Enqueue it!

}

function daleb_enqueue_comments_reply() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}


function daleb_body_classes( $classes ) {
    if( ! is_front_page() ) {
        $classes[] = 'not-home';
    }

    if( is_singular() ) {
        $classes[] = 'singular';
    }

    if( is_page_template('full-width-module-page.php') ) {
        $classes[] = 'module-page';
    }

    if( is_archive() || is_search() || is_home() ) {
        $classes[] = 'list-view grid-view';
    }

    return $classes;
}
add_filter('body_class', 'daleb_body_classes');

/**
 * Extend the default WordPress post classes.
 *
 * Adds post classes to denote:
 * 1. Any entry.
 * 2. A clearfix.
 *
 * @since Dale Beaumont 1.0
 *
 * @param array $classes A list of existing post class values.
 * @return array The filtered post class list.
 */
function daleb_post_classes( $classes ) {
    $classes[] = 'entry';
    $classes[] = 'clearfix';

    return $classes;
}
add_filter('post_class', 'daleb_post_classes');



function daleb_comment_count( $count ) {
    if ( ! is_admin() ) {
        global $id;
        $comments = get_comments( 'status=approve&post_id=' . $id );
        $comments_by_type = separate_comments( $comments );

        return count( $comments_by_type['comment'] );
    } else {
        return $count;
    }
}
add_filter('get_comments_number', 'daleb_comment_count', 0);



function daleb_excerpt_more( $more ) {
    if ( is_front_page() ) {
        return '';
    }

    return '… <a href="' . get_permalink() . '" class="entry__read-more">[Read More…]</a>';
}
add_filter('excerpt_more', 'daleb_excerpt_more', 999);


function daleb_excerpt_length( $length ) {
    if ( is_front_page() ) {
        return 25;
    }

    return $length;
}
add_filter( 'excerpt_length', 'daleb_excerpt_length', 999 );

function daleb_testimonial_size( $sizes ) {
    return array( '284', '284' );
}
add_filter( 'magicdust_testimonials_thumbnail_size', 'daleb_testimonial_size', 99 );


/**
 * Adjust Testimonial Slideshow Settings
 *
 * @param array $options Flexslider options as array.
 * @return array Filtered flexslider options.
 * @since  1.0
 */
function daleb_testimonial_slideshow_options( $options ) {
    $options['smoothHeight'] = false;
    $options['controlNav'] = true;
    $options['slideshow'] = false;

    return $options;
}
add_filter( 'magicdust_testimonials_flexslider_options', 'daleb_testimonial_slideshow_options', 99 );