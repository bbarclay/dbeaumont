<?php 
  $style = get_sub_field( 'banner_image' ) ? 'style="background-image: url(' . get_sub_field( 'banner_image' ) . ');"' : ''; 
 ?>
<section class="banner" <?php echo $style; ?>>
    <div class="container">
 	   <h1 class="module__heading animated"><?php the_title(); ?></h1>
 	</div>
</section>