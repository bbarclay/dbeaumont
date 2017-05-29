
<section class="module module--features">
	
	<div class="container">     
    	<h2 class="module__title"><?php the_sub_field( 'title' ); ?></h2>
        	<?php if ( have_rows( 'press' ) ) : ?>
        	
        	<div class="row">
            	<?php while( have_rows( 'press' ) ) : the_row(); ?>
           		<div class="col-xs-6 col-sm-6 col-md-3">
                	<div class="module__media">
                    	<div class="image">
                        	<a href="<?php the_sub_field( 'popup' ); ?>" class="popup-this" title="<?php the_sub_field('description') ?>"> 
                                <img src="<?php the_sub_field( 'thumbnail' ); ?>" alt="<?php the_sub_field('description') ?>" />
                            </a>
                        </div>
                        <p class="title"><?php the_sub_field( 'description' ); ?></p>
                        <?php if ( have_rows( 'buttons' ) ) : ?>
                        <div class="grid grid--feature-buttons">
                        	<?php while( have_rows( 'buttons' ) ) : the_row(); ?>
                        	<div class="grid__column">
                            	<a href="<?php the_sub_field( 'link' ); ?>" class="feature__button <?php the_sub_field( 'color' ); ?>" download>
                                	<?php the_sub_field( 'button_name' ); ?>
                                </a>
                            </div>
                            <?php endwhile; ?>
                       	 </div>
                         <?php endif; ?>
                  		</div>
					</div>
                    <?php endwhile; ?>        
				</div>
                <?php endif; ?>
	</div>
    
</section>
