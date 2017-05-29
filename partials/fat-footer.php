<?php
/**
 * Template part for displaying content in footer.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dale_beaumont
 */
?>

<aside class="fat-footer" role="complementary">
	<div class="row">
		<div class="col-md-6">
		    <div class="pad-right">
				<div class="footer-logo">	
				   <?php  
				        $image = get_field( 'footer_logo', 'option' );

				      if( !empty($image) ) { ?>			
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php } ?>			
				</div>
	            <div class="description">
	            	<?php 
	            	  $about = get_field( 'about_us', 'option' );

                          if(!empty($about)) {
                          	  echo $about;
                          }
	            	?>
	            </div>
			</div>
		</div>

		<div class="col-md-2">
			<?php wp_nav_menu( array(
				'theme_location' => 'footer',
				'menu_class'     => 'menu  menu--footer'
			) ); ?>
		</div>
		<div class="col-md-4">
			<?php wp_nav_menu( array(
				'theme_location' => 'social',
				'depth'          => 1,
				'fallback_cb'    => false,
				// 'link_before'    => '<span class="screen-reader-text">',
				// 'link_after'     => '</span>',
				'menu_class'     => 'menu  menu--social'
			) ); ?>

			<div class="facebook-feed">
			    <?php if(do_shortcode('[custom-facebook-feed]')) { ?>
			    <div class="feed-header">
			    	<?php 
	            	  $heading = get_field( 'facebook_heading', 'option' );

                          if(!empty($heading)) {
                          	  echo $heading;
                          }
	            	?>
			    </div>
				<?php echo do_shortcode('[custom-facebook-feed]') ?>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php if ( get_theme_mod( 'footer_tagline' ) ) : ?>
		<p class="tagline"><?php echo get_theme_mod( 'footer_tagline' ); ?></p>
	<?php endif; ?>
	<div class="copyright">
		Copyright © <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.

		<?php wp_nav_menu( array(
			'theme_location' => 'fine',
			'depth'          => 1,
			'container'      => false,
			'items_wrap'     => '%3$s',
			'fallback_cb'    => false,
		) ); ?>
	</div>
</aside>