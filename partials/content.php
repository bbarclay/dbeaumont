<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemprop="http://schema.org/CreativeWork">
	<header class="entry__header">
		<h1 class="entry__title" itemprop="headline">
			<?php the_title(); ?>
		</h1>
	</header>
	
	<div class="entry__content  clearfix" itemprop="text">
		<?php the_content(); ?>
		
		<?php dale_link_pages(); ?>
	</div>


</article>