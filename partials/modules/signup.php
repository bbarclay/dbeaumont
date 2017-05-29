<section id="signup" class="module">
	  <div class="container">
	       <h2 class="module__heading"><?php the_sub_field( 'signup_header' ); ?></h2>
			<p  class="module__subheading"><?php the_sub_field( 'signup_text' ); ?></p>
	       <div class="signup-form--horizontal"> 
					<?php the_sub_field( 'signup_form' ); ?> 
		   </div>		
	  </div>
</section>