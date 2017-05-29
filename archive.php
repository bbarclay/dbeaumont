<?php get_header(); ?>

	<div class="container  spacing-top">
	
			<div id="content" class="content" role="main" itemscope itemprop="mainContentOfPage">
				<header class="archive__header">
					<h1 class="archive__title">
						<?php the_archive_title(); ?>
					</h1>

					<?php the_archive_description(); ?>
				</header>

				<?php get_template_part( 'partials/loop' ); ?>
	

	</div>
	
<?php get_footer(); ?>