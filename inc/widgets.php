<?php

/**
 * Register theme widget areas.
 *
 * @since  1.0
 */
function daleb_register_widgets() {
	
	register_sidebar( array(
		'name'          => 'Front Page',
		'id'            => 'front-page',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<header class="widget__header"><h1 class="widget__title">',
		'after_title'   => '</h1></header>',
	) );
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<header class="widget__header"><h1 class="widget__title">',
		'after_title'   => '</h1></header>',
	) );
	register_sidebars( '4', array(
		'name'          => 'Footer %d',
		'id'            => 'footer',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<header class="widget__header"><h1 class="widget__title">',
		'after_title'   => '</h1></header>',
	) );
}
