<?php 
$post_thumbnail_id = get_post_thumbnail_id( get_the_ID() );
$featured_image = wp_get_attachment_image_src( $post_thumbnail_id, 'large' );
$style = ( isset( $featured_image[0] ) ) ? 'style="background-image:url(' . $featured_image[0] . ');"' : ''; 
?>

<div class="grid__column grid__column--m-3  grid__column--s-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'featured-post' ); ?> itemscope itemprop="http://schema.org/WebPage">
		<a href="<?php the_permalink(); ?>" rel="bookmark" itemprop="url">
			<div class="featured-post__thumbnail" <?php echo $style; ?>>
				<?php dale_category_icon(); ?>
			</div>

			<header class="featured-post__header">
				<h1 class="h5 featured-post__title" itemprop="name">
					<?php the_title(); ?>
				</h1>
			</header>
		</a>
	</article>
</div>