<?php $color = get_sub_field( 'bg_color' ) ? 'style="background-color: #' . get_sub_field( 'bg_color' ) . ';"' : ''; ?>
<section id="featured" class="module">
   <div class="container">
   	    <h2 class="module__heading"><?php the_sub_field( 'title' ); ?></h2>

   	    <div class="image">
   	    	<?php $imageID = get_sub_field('image'); ?>
			<?php $image = wp_get_attachment_image_src( $imageID, 'full' ); ?>
			<?php $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); ?>

			<?php if( $imageID ) : 
				$image    = wp_get_attachment_image_src( $imageID, 'full' ); 
				$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
			?>
            	<img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" class="media-logos animated FadeInRight"/>
        	<?php endif; ?>

        	<?php if( have_rows('images') ) : ?>
				<div class="logos grid">	
					<?php while( have_rows('images') ) : the_row(); ?>
						<div class="item">
						<?php 
                             echo wp_get_attachment_image(get_sub_field('item'), 'full');
						?>
						</div>

					<?php endwhile ?>
				</div>		
        	<?php endif; ?>	
   	    </div>
   </div>
</section>