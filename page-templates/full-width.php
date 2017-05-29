<?php
/*
Template Name: Full-width Template
*/
get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'partials/content', 'banner' ); ?>
	<?php endwhile; ?>

	<div class="container spacing-top">
		<div id="content" class="content" role="main" itemscope itemprop="mainContentOfPage">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'partials/content', 'page' ); ?>
				
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</div>
	</div>
	
<?php get_footer(); ?>