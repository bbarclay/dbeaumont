<div class="entry__meta" role="contentinfo">
	<time datetime="<?php the_time( 'c' ); ?>" itemprop="datePublished">
		<a href="<?php the_permalink(); ?>" rel="bookmark" itemprop="url" class="entry__meta-item  entry__meta-item--date">
			<?php the_time( 'F j, Y' ); ?>
		</a>
	</time>

	<?php if ( comments_open() || get_comments_number() ) : ?>
		<a class="entry__meta-item  entry__meta-item--comments" href="<?php comments_link(); ?>" itemprop="discussionURL">
			<?php comments_number( __( 'Leave a Comment', 'cascade' ),  __( '<span itemprop="commentCount">1</span> Comment', 'cascade' ), __( '<span itemprop="commentCount">%</span> Comments', 'cascade' ) ); ?>
		</a>
	<?php endif; ?>

	<?php edit_post_link( 'Edit' ); ?>
</div>