<section id="testimonials" class="module">
	<div class="container">
	<?php if ( $testimonials = get_sub_field( 'testimonials' ) ) : wp_enqueue_script( 'slick'); $slick_id = uniqid(); ?>
		 	 <div class="testimonial">
			     <?php
                               $args = array(
                                  'post_type'      => 'testimonial',
                                  'post_status'    => 'publish',
                                  'order'          => 'DESC',
                                  'orderby'        => 'date',
                                  'post_status'    => 'publish',
                                  'posts_per_page' => 10,
                                );
                          $query = new WP_Query( $args );
                    ?>
                  <?php if ($query->have_posts()) : ?> 
                  	<?php while ($query->have_posts()) : $query->the_post(); ?>
		 	 	  <div class="row">

		 	 	  		<div class="col-md-3">
		 	 	  		 	
					 	 	  <div class="testimonial__image">
					 	 	  	<?php if(has_post_thumbnail()) {  

					 	 	  		      the_post_thumbnail('testimonial-thumb'); 

										} else {
											$img = get_field('default_testimonial_image', 'option');
	                                             echo '<img src="'. $img['url'] .'"  alt="' . $img['alt'] . '"/>';
									}
								?> 
					 	 	  </div>
					 	 	
					 	</div>
					 	<div class="col-md-9"> 	  
					 	 	  <div class="testimonial__quote">
					 	 	  	  <p><?php the_content(); ?></p>
					 	 	  </div>
							  <cite class="testimonial__attribution">
										<span class="testimonial__name"><?php the_title(); ?>,</span>
										<span class="testimonial__subtitle"><?php echo $subtitle = sanitize_text_field( get_post_meta( get_the_ID(), 'testimonial_subtitle', true ) ); ?></span>
							  </cite>
			 	 	  </div>

		 	 	  </div>
			 <?php endwhile; endif; wp_reset_postdata(); ?>
		 	 </div>
	<?php endif; ?>
	</div>
</section>