<?php
/**
 * Template Name: Photo Template
 */
get_header(); ?>

	
	<?php get_template_part( 'partials/content', 'banner' ); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

             
                <?php if (have_posts()) : ?>
                   <?php while (have_posts()) : the_post(); ?>
                                <section class="module module--text text-center">
                                     <div class="container">
                                          <?php the_content(); ?>
                                     </div>     
                                </section>                                   
                 <?php   endwhile;
                     endif;
                     wp_reset_query();
                  ?>               
             
             <section id="" class="module">
                  <div class="container">
                         <?php
                  
                               $args = array(
                                  'post_type'      => 'db_photos',
                                  'post_status'    => 'publish',
                                  'order'          => 'ASC',
                                  'orderby'        => 'menu_order',
                                  'post_status'    => 'publish',
                                  'posts_per_page' => -1,
  
                                );
                          		$query = new WP_Query( $args );

                         ?>
                   
                         	 <?php if ($query->have_posts()) :   ?>
                             	<?php while ($query->have_posts()) : $query->the_post(); ?>

               						<section class="module module--features">
	
										<div class="container">     
									    	<h2 class="module__title"><?php echo get_the_title(); ?></h2>
									        	<?php if ( have_rows( 'photos' ) ) : ?>
									        	
									        	<div class="row">
									            	<?php while( have_rows( 'photos' ) ) : the_row(); ?>
									           		<div class="col-xs-6 col-sm-6 col-md-3">
									                	<div class="module__media">
									                    	<div class="image">
									                        	<a href="<?php the_sub_field( 'popup' ); ?>" class="popup-this" title="<?php the_sub_field('description') ?>"> 
									                                <img src="<?php the_sub_field( 'thumbnail' ); ?>" alt="<?php the_sub_field('description') ?>" />
									                            </a>
									                        </div>
									                        <p class="title"><?php the_sub_field( 'description' ); ?></p>
									                        <?php if ( have_rows( 'buttons' ) ) : ?>
									                        <div class="grid grid--feature-buttons">
									                        	<?php while( have_rows( 'buttons' ) ) : the_row(); ?>
									                        	<div class="grid__column">
									                            	<a href="<?php the_sub_field( 'link' ); ?>" class="feature__button <?php the_sub_field( 'color' ); ?>" download>
									                                	<?php the_sub_field( 'button_name' ); ?>
									                                </a>
									                            </div>
									                            <?php endwhile; ?>
									                       	 </div>
									                         <?php endif; ?>
									                  		</div>
														</div>
									                    <?php endwhile; ?>        
													</div>
									                <?php endif; ?>
										</div>
									    
									</section>


                           		<?php endwhile; ?>       
                  
                         <?php endif; ?>  
                         <?php wp_reset_postdata(); ?>
                  </div> 
             </section>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>