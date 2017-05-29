<?php if ( post_password_required() ) : return; endif; ?>

<?php if ( comments_open() || get_comments_number() ) : ?>
	<section id="comments" class="comments">
		<?php if ( have_comments() ) : ?>
			<h1 class="comments__title  h4">
				<?php printf( _n( 'One reply to “%2$s”', '%1$s replies to “%2$s”', get_comments_number(), 'cascade' ), get_comments_number(), get_the_title() ); ?>
			</h1>

			<ol class="comment__list">
			    <?php wp_list_comments( array(
	                'style'       => 'ol',
	                'short_ping'  => true,
	                'avatar_size' => 50,
		        ) ); ?>
			</ol>

			<?php if ( get_comment_pages_count() > 1 ) : ?>
				<nav class="pagination" role="navigation">
					<?php paginate_comments_links( array('prev_text' => __( '← Previous', 'cascade' ), 'next_text' => __( 'Next →', 'cascade' ) ) ); ?>
				</nav>
			<?php endif; ?>

			<?php if ( ! comments_open() ) : ?>
				<p><?php _e( 'Comments are closed.', 'cascade' ); ?></p>
			<?php endif; ?>
		<?php endif; ?>

		<?php comment_form(); ?>
	</section>
<?php endif; ?>