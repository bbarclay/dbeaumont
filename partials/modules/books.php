<section class="module module--books" id="books">
	
	<div class="container">     
    	<h2 class="module__title"><?php the_sub_field( 'heading' ); ?></h2>
        	<?php if ( have_rows( 'list' ) ) : ?>
        	
        	<div class="row">
            	<?php while( have_rows( 'list' ) ) : the_row(); ?>
           		<div class="col-custom col-xs-4 col-sm-4 col-md-4 text-center">
                	<div class="module__book">
                    	<figure class="book-img">
                            <?php 

                                $id =  get_sub_field('image'); 

                                echo wp_get_attachment_image( $id, 'full' );
                            ?>
                        </figure>
                        <?php if ( get_sub_field( 'link' ) ) : ?>
                            <div class="module__button">
                                <a href="<?php echo get_sub_field( 'link' ); ?>" class="module__button--link" target="_blank"><span><?php echo get_sub_field( 'button_text' ); ?></span></a>
                            </div> 
                        <?php else: ?>
                            <span class="title"><?php echo get_sub_field( 'button_text' ); ?></span>
                        <?php endif; ?>
              		</div>
				</div>
                <?php endwhile; ?>        
		</div>
        <?php endif; ?>
	</div>
    
</section>
