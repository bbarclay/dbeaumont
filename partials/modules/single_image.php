<?php $color = get_sub_field( 'bg_color' ) ? 'style="background-color: #' . get_sub_field( 'bg_color' ) . ';"' : ''; ?>
<section id="featured" class="module">
   <div class="container">
   	    <h2 class="module__heading"><?php the_sub_field( 'title' ); ?></h2>

   	    <div class="image">
   	    	<?php $imageID = get_sub_field('image'); ?>
			<?php $image = wp_get_attachment_image_src( $imageID, 'full' ); ?>
			<?php $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); ?>
            <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" class="media-logos animated FadeInRight"/>
   	    </div>
   </div>
</section>