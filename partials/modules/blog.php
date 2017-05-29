<?php $color = get_sub_field( 'bg_color' ) ? 'style="background-color: #' . get_sub_field( 'bg_color' ) . ';"' : ''; ?>
<section id="featured-blogs" class="module">
	<div class="container">
		 <h2 class="module__heading animated"><?php the_sub_field( 'blog_heading' ); ?></h2>
		 <?php if( have_rows('blog')): // check for repeater fields ?>
		 <div class="row">
		 <?php 
		 	$count = 0;
		    while ( have_rows('blog')) : the_row(); // loop through the repeater fields ?>
			<?php // set up post object
                $post_object = get_sub_field('blog');
                if( $post_object ) :
                $post = $post_object;
                setup_postdata($post);

                $count++;

             ?>
		 	 <div class="col-custom col-md-6 col-sm-6 col-xs-6">
		 	 	 <a href="<?php the_permalink(); ?>" class='blog'>
		 	 	 	 <div class='blog__panel blog-<?php echo $count; ?> animated'>
		 	 	 	 	  <div class="blog__image">
		 	 	 	 	  	   <?php if(has_post_thumbnail()) {  the_post_thumbnail('home-blog-thumb'); ?>
									<?php } else { ?>
										<?php echo '<img src="'.get_bloginfo("template_url").'/images/homeblog-default.jpg"  />'; ?>
									<?php } ?>  
		 	 	 	 	  </div>
		 	 	 	 	  <h3 class="blog__title"><?php the_title(); ?></h3>
		 	 	 	 </div>
		 	 	 </a>
		 	 </div>
		 	 <?php if($count % 2 == 0) { ?><div class="clearfix visible-sm-block"></div><?php } ?>
		 	 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    		 <?php endif; ?> 
			 <?php endwhile; ?>
		 </div>
		 <!-- End Repeater -->
		 <?php endif; ?>	
		 <?php if( get_field('blog_page_link', 'option') ) { ?>
			 <div class="module__button">
			 	  <a href="<?php echo get_field('blog_page_link', 'option') ?>" class="module__button--link"><?php echo get_field('front_page_blog_page_text', 'option') ?></a>
			 </div>
		 <?php } ?>	 
	</div>
</section>