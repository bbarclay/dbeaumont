<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DB
 */
?>
	<section id="next-step" class="top-footer module">
	<div class="container">
			<?php  $heading = get_field( 'step_heading', 'option' );

                  if(!empty($heading)) { ?>
                      <h2 class="module__heading"><?php echo $heading ?></h2>

            <?php  } ?>
			 
				 <div class="row">
				 	  <div class="col-custom col-md-6 col-sm-6 col-xs-6">

				 	  	<?php  $link = get_field( 'step_1_link', 'option' );

	                          if(!empty($link)) { 

	                              $image = get_field( 'step_1_image', 'option' ); ?>

						 	      <a href="<?php echo $link; ?>" target="_blank">
							 	  	  <div class="module__image animated step-1">
							 	  	    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							 	  	  </div>
						 	  	  </a>

	                    <?php  } ?>

				 	  </div>
				 	  <div class="col-custom col-md-6 col-sm-6 col-xs-6">
							<?php  $link = get_field( 'step_2_link', 'option' );

	                          if(!empty($link)) { 

	                              $image = get_field( 'step_2_image', 'option' ); ?>

						 	      <a href="<?php echo $link; ?>" target="_blank">
							 	  	  <div class="module__image animated step-2">
							 	  	    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							 	  	  </div>
						 	  	  </a>

	                    	   <?php  } ?> 
				 	  </div>
				 </div>
		</div>
	</section>
	<section id="signup" class="module">
	  <div class="container">
			<?php  $heading = get_field( 'form_heading', 'option' );

                  if(!empty($heading)) { ?>
                      <h2 class="module__heading"><?php echo $heading ?></h2>

            <?php  } ?>
			<?php  $subheading = get_field( 'form_subheading', 'option' );

                  if(!empty($subheading)) { ?>
                      <p  class="module__subheading"><?php echo $subheading ?></p>

            <?php  } ?>
            <?php  $form = get_field( 'form', 'option' );

                  if(!empty($form)) { ?>
                  		
                          <?php the_field( 'form', 'option' ); ?>

            <?php  } ?>
	       		
	  </div>
	</section>
	<footer class="site-footer">
				<div class="container">
					<div class="footer  clearfix" itemscope itemtype="http://schema.org/WPFooter">
						<?php get_template_part( 'partials/fat-footer' ); ?>
					</div>
				</div>
			<?php wp_footer(); ?>
	</footer>

   </div> 
</body>
</html>