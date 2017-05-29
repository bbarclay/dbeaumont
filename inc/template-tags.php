<?php
/**
 * Custom template tags for Cascade
 *
 * @package Cascade
 * @since   1.0
 */

if ( ! function_exists( 'daleb_navbar' ) ) :
/**
 * Display a navbar.
 *
 * @param string $theme_location	The location in the theme to be used.
 *
 * @since 1.0
 */
function daleb_navbar( $theme_location ) {
	if ( ! has_nav_menu( $theme_location ) ) {
		return;
	}
	?>
	<nav class="navbar" role="navigation" itemscope itemprop="http://schema.org/SiteNavigationElement">
		<div class="container">
			<div class="navbar__header">
				<button class="navbar__toggle" aria-controls="<?php echo $theme_location; ?>" aria-expanded="false" aria-label="<?php _e( 'Toggle Menu', 'cascade' ); ?>">
					<span class="genericon  genericon-menu"></span> <?php _e( 'Menu', 'cascade' ); ?>
				</button>
			</div>
			<?php 
			wp_nav_menu( array(
				'menu_id'        => $theme_location,
				'theme_location' => $theme_location,
				'menu_class'     => 'navbar__menu  clearfix',
				'container'      => false,
				'fallback_cb'    => false,
			) );
			?>
		</div>
	</nav>
	<?php
}
endif;





if ( ! function_exists( 'daleb_paginate_links' ) ) :
/**
 * Display page links for paginated archives.
 *
 * @since 1.0
 */
function daleb_paginate_links() {
	global $wp_query;
	
	$args = array(
		'prev_text' => __( '← Previous', 'cascade' ),
		'next_text' => __( 'Next →', 'cascade' ),
		'show_all'  => false,
	);
	?>

	<nav class="pagination" role="navigation">
		<?php echo paginate_links( $args ); ?>
	</nav>
	<?php
}
endif;





if ( ! function_exists( 'daleb_link_pages' ) ) :
/**
 * Displays page links for paginated posts.
 *
 * @since 1.0
 */
function daleb_link_pages() {
	wp_link_pages( array(
		'before'      => '<nav class="pagination clearfix" role="navigation">',
		'after'       => '</nav>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
	) );
}
endif;