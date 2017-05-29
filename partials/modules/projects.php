<?php $color = get_sub_field( 'bg_color' ) ? 'style="background-color: #' . get_sub_field( 'bg_color' ) . ';"' : ''; ?>
<section id="<?php  echo get_sub_field('section_name') ?>" class="module">
	<div class="container">
		 <h2 class="module__heading animated"><?php the_sub_field( 'title' ); ?></h2>
		 <div class="row">
			<?php if( have_rows('image') ): ?>
				<?php 
				 	$count = 0;

					while ( have_rows('image') ) : the_row(); 

					$count++;
				?>
						 <div class="col-custom col-md-6 col-sm-6 col-xs-6">
							 <a href="<?php the_sub_field( 'link' ); ?>" class='project' target="<?php the_sub_field( 'target' ); ?>">
								 <div class='project__panel project-<?php echo $count; ?> animated'>
									  <div class="project__panel--image">
										<?php $imageID = get_sub_field('image'); ?>
										<?php $image = wp_get_attachment_image_src( $imageID, 'full' ); ?>
										<?php $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); ?>
										<img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
									  </div>
								 </div>
							 </a>
						 </div>
				<?php  endwhile; ?>
			 <?php endif; ?>			 
		 </div>
	</div>
</section>