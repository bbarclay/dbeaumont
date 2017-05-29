<?php 
  $style = get_sub_field( 'banner_image' ) ? 'style="background-image: url(' . get_sub_field( 'banner_image' ) . ');"' : ''; 

  $intro_text = get_sub_field( 'intro_text' ); 
 ?>
<section class="banner" <?php echo $style; ?>>
     <div class="container">
 	   <h1 class="module__heading animated"><?php the_title(); ?></h1>
 	</div>
</section>
<?php 
  if(!empty($intro_text)) {
?>
	<section class="module module--text text-center">
		<div class="container">
		  <?php echo  $intro_text; ?>
		</div>  
	</section>
<?php } 
  wp_reset_postdata();
?>