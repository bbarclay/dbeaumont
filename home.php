<?php get_header(); ?>


    <?php get_template_part( 'partials/content', 'banner' ); ?>

	<div class="container spacing-top">
		<div id="content" class="content" role="main" itemscope itemprop="mainContentOfPage">
			
			<?php get_template_part( 'partials/grid-loop' ); ?>
		</div>
	</div>
	
<?php get_footer(); ?>