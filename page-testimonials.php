<?php
/**
 *
 *
 * @package DB
 */
get_header(); ?>
  <?php get_template_part( 'partials/content', 'banner' ); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

             <section id="testimonial-page" class="module">
                  <div class="container">
                         <?php

                         $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

                               $args = array(
                                  'post_type'      => 'testimonial',
                                  'post_status'    => 'publish',
                                  'order'          => 'DESC',
                                  'orderby'        => 'date',
                                  'post_status'    => 'publish',
                                  'posts_per_page' => 10,
                                  'paged' => $paged,
                                );
                          $query = new WP_Query( $args );
                         ?>
                         	 <?php if ($query->have_posts()) : ?>
                            <div class="row">
                             	<?php while ($query->have_posts()) : $query->the_post(); ?>





                                <article  class="module">
 
                          
                                       <div class="testimonial">
                                       
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
                                                    <span class="testimonial__name"><?php the_title(); ?> - </span>
                                                    <span class="testimonial__subtitle"><?php echo $subtitle = sanitize_text_field( get_post_meta( get_the_ID(), 'testimonial_subtitle', true ) ); ?></span>
                                                </cite>
                                            </div>
                                          </div>

                                       </div>

                                 </article>
                           		<?php endwhile; ?>       
                         </div>
                         <?php endif; ?>  
                         <?php wp_reset_postdata(); ?>

                         <nav class="pagination" role="navigation">
                            <?php
                            $big = 999999999; // need an unlikely integer

                            echo paginate_links( array(
                              'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                              'format' => '?paged=%#%',
                              'current' => max( 1, get_query_var('paged') ),
                              'total' => $query->max_num_pages
                            ) );
                            ?> 
                         </nav>

                  </div> 
             </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();