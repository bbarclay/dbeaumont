<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'partials/excerpt', get_post_type() ); ?>
<?php endwhile; else: ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.', 'cascade' ); ?></p>
<?php endif; ?>	

<?php daleb_paginate_links(); ?>