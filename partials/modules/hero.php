<?php $style = get_sub_field( 'image' ) ? 'style="background-image: url(' . get_sub_field( 'image' ) . ');"' : ''; ?>
<section id="hero" class="module module--hero" <?php echo $style; ?>>
	<div class="container">
		<div class="row">
			  <div class="col-md-offset-6 col-md-6 col-lg-offset-4 col-lg-8">
			  	  <?php the_sub_field( 'header_text' ); ?>
			  </div>
		</div>
	</div>
</section>