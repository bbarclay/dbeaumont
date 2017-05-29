<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemprop="http://schema.org/BlogPosting">
	<header class="entry__header">
		<h1 class="entry__title  h2" itemprop="headline">
			<a href="<?php the_permalink(); ?>" rel="bookmark" itemprop="url">
				<?php the_title(); ?>
			</a>
		</h1>
		
		<?php get_template_part( 'partials/post-meta' ); ?>
	</header>

	<div class="entry__summary" itemprop="description">
		<?php the_excerpt(); ?>
	</div>


</article>