<?php get_header(); ?>
   <?php get_template_part( 'partials/content', 'banner' ); ?>
	<div class="container spacing-top">
		<div id="content" class="content" role="main" itemscope itemprop="mainContentOfPage">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'partials/content', get_post_type() ); ?>
				
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</div>
	</div>
	
<?php get_footer(); ?>