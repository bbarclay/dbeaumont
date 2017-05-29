<?php
/**
 *  Custom Grid Page for (Media Articles)
 *
 *  Template Name: Media Page Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DB
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
                         $per_page = get_field('media_post_per_page', 'option');
                         $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

                               $args = array(
                                  'post_type'      => 'media_articles',
                                  'post_status'    => 'publish',
                                  'order'          => 'ASC',
                                  'orderby'        => 'menu_order',
                                  'post_status'    => 'publish',
                                  'posts_per_page' => $per_page,
                                  'paged' => $paged,
                                );
                          $query = new WP_Query( $args );
                         ?>
                         <div class="row">
                         	 <?php if ($query->have_posts()) : ?>
                             	<?php while ($query->have_posts()) : $query->the_post(); ?>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                      <div class="module__media">
                                            <h3><a href="<?php the_field('media_link'); ?>" title="Dale has been featured in <?php the_field('media_source'); ?> " target="new"><?php the_field('media_source'); ?></a></h3>

                                            <div class="image">
                                            	 <a href="<?php the_field('media_link'); ?>" rel="bookmark" title="Dale has been featured in <?php the_field('media_source'); ?> " target="new">
										                            <?php $image = wp_get_attachment_image_src(get_field('media_image'), 'full'); ?>
										                                <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('media_image')) ?>" /> 
										                              </a>
                                            </div>
                                           <p>
                                               <a href="<?php the_field('media_link'); ?>" rel="bookmark" title="Dale has been featured in <?php the_field('media_source'); ?> " target="new">Click here</a> 
                                                <?php if( get_field('media-type') ) { ?>
                                									to <?php the_field('media-type'); ?>.
                                								<?php	} else  { ?>
                                									to read.
                                								<?php	} ?>
                                          </p>
                                      </div>
                                </div>
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