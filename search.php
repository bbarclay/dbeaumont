<?php get_header(); ?>

	<div class="container  content-sidebar">
		<div class="row">
			<div class="col-md-12 grid__column  grid__column--content">
				<div id="content" class="content" role="main" itemscope itemprop="mainContentOfPage">
					<header class="archive__header">
						<h1 class="archive__title">
							<?php printf( __( 'Search results for “%1$s”', 'cascade' ), get_search_query() ); ?>
						</ht>
					</header>

					<?php get_template_part( 'partials/loop' ); ?>
				</div>
			</div>

		</div>

		<?php echo adrotate_group(2); ?>
	</div>
	
<?php get_footer(); ?>