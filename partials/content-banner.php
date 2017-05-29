<?php 


  if(!is_home() && has_post_thumbnail() && get_post_type()  != 'post' && !is_single()) {

  	 $image = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'banner' ); 
     $bg =  $image[0];
     
  }
  else if (is_home() && get_post_type()  == 'post') {
  	/*  ------------------------------
		Check Default Banner in Theme Settings
  	*/
  	 $image = get_field('default_blog_banner_image','option');
  	 $heading = get_field('default_blog_heading','option');
     $bg =  $image;
  }
  else if ( get_post_type()  == 'post') {

    $image = get_field('default_blog_banner_image','option');
     $heading = get_field('default_blog_heading','option');
     $bg =  $image;     
  }
  else {

  	$banner = get_field('default_banner_image', 'option');
  	$bg = $banner['url'];
  }
?>

<div class="banner" style="background-image: url(<?php echo $bg ?>);">
   <div class="container">
    	 
    	 <?php 

    	  if(is_home()) {
    	 		echo '<h1 class="page-title">' . $heading . '</h1>';  
    	   }
        else if( get_post_type()  == 'post' && is_single()) {
          echo '<h1 class="page-title">' . $heading . '</h1>'; 
         }
    	   else {
    	   	  echo '<h1 class="page-title">' . get_the_title() . '</h1>';  
    	   }
    	 ?>
    	 	
    	
   </div>    
</div>