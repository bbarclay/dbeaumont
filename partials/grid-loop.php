<div class="row">
<?php $count = 0 ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
  $count++;
?>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemprop="http://schema.org/CreativeWork">
				<div class="entry__image">
					<?php if( has_post_thumbnail() ) { 
							echo get_the_post_thumbnail();
					 } ?>
				</div>
				<header class="entry__header">
					<h1 class="entry__title  h2" itemprop="headline">
						<a href="<?php the_permalink(); ?>" rel="bookmark" itemprop="url">
							<?php the_title(); ?>
						</a>
					</h1>
					<!-- 
					<div class="entry__meta" role="contentinfo">
						<?php edit_post_link( 'Edit' ); ?>
					</div> -->
				</header>
				
			</article>
		</div>	
		<?php if($count % 2 == 0 ) { ?> 
		<div class="clearfix col-md-block"></div>	
		<?php } ?>
	 
<?php endwhile; ?>
 </div><!-- ./End Row -->
  <?php daleb_paginate_links(); ?>

<?php else: ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.', 'cascade' ); ?></p>
<?php endif; ?>	



