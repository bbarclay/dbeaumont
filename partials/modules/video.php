<?php $color = get_sub_field( 'bg_color' ) ? 'style="background-color: #' . get_sub_field( 'bg_color' ) . ';"' : ''; ?>
<section id="video" class="module">
  <div class="container">
  	  <h2 class="module__heading animated"><?php the_sub_field( 'heading' ); ?> </h2>
  	  <p class="module__subheading"><?php the_sub_field( 'sub_heading' ); ?> </p>
   </div>

   	<?php if ( get_sub_field( 'video' ) ) :
		$video_url = get_sub_field( 'video', false );
		$video_url = parse_url( $video_url );
		$video_id = basename($video_url['path']);
		?>

		<div class="module__player">
			 <div class="container">
				<?php the_sub_field( 'video' ); ?>
			</div>
		</div>

		<script>
			window._wq = window._wq || [];
			_wq.push({ id: "<?php echo $video_id; ?>", onReady: function(video) {
				video.bind('play', function() {
					$('.module__player').velocity({
						paddingTop: '56.25%'
					},{
						duration: 500,
					});
				});
			}});
		</script>
	<?php endif; ?>
</section>