<?php $style = get_sub_field( 'image' ) ? 'style="background-image: url(' . get_sub_field( 'image' ) . ');"' : ''; ?>
<section id="hero" class="module module--hero <?php echo ( get_sub_field( 'text_left_align' ) ) ? 'align-left': '' ?>" <?php echo $style; ?>>
	<div class="container">
		<div class="row">
			  <div class="col-md-6 col-lg-8 <?php echo ( get_sub_field( 'text_left_align' ) ) ? '': 'col-md-offset-6 col-lg-offset-4' ?>">
			  	  <?php the_sub_field( 'header_text' ); ?>
			  </div>
		</div>
	</div>
</section>