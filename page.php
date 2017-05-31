<?php get_header(); ?>
    <?php get_template_part( 'partials/content', 'banner' ); ?>

	<div class="container spacing-top">
		<div class="row">
			<div class="col-md-12 content">
				<div id="content" class="content" role="main">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'partials/content', 'page' ); ?>
						
						<?php //comments_template(); ?>
					<?php endwhile; ?>
				</div>
			</div>

		</div>

	</div>
	
<?php get_footer(); ?>