<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="initial-scale=1">
	<?php wp_head(); ?>
	<?php if ( is_singular() && comments_open() ) wp_enqueue_script( 'comment-reply' ); ?>
</head>