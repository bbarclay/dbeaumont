<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemprop="http://schema.org/BlogPosting">
	<header class="entry__header">
		<h1 class="entry__title" itemprop="headline">
			<?php the_title(); ?>
		</h1>
		
	</header>

	<div class="entry__content" itemprop="articleBody">
		<?php the_content(); ?>
		
		<?php daleb_link_pages(); ?>
	</div>

	<?php //get_template_part( 'partials/post-footer' ); ?>

</article>