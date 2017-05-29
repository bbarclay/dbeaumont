<?php if ( has_category() || has_tag() ) : ?>
	<div class="entry__footer">
		<?php if( has_category() ) : ?>
			<div class="entry__terms entry__terms--categories">
				<?php echo get_the_category_list( ', ' ); ?>
			</div>
		<?php endif; ?>

		<?php if( has_tag() ) : ?>
			<div class="entry__terms entry__terms--tags">
				<?php echo get_the_tag_list( '', ', ', '' ); ?>
			</div>
		<?php endif; ?>
	</div>
<?php endif; ?>

<?php if ( is_single() ) : ?>
	<nav class="post-navigation  clearfix" role="navigation">
		<?php previous_post_link( '<div class="post-navigation__prev">%link</div>', '← %title' ); ?>
		<?php next_post_link( '<div class="post-navigation__next">%link</div>', '%title →' ); ?>
	</nav>
<?php endif; ?>