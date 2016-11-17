<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head(); ?>
</head>
<body>
	<h1><?php bloginfo( 'name' ); ?></h1>
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();

			the_title( '<h2>', '</h2>' );
			the_content( __( 'Read more.', 'simplestever' ) );

		endwhile;

		the_posts_pagination( array(
			'prev_text'          => __( 'Previous page', 'simplestever' ),
			'next_text'          => __( 'Next page', 'simplestever' ),
			'before_page_number' => __( 'Page', 'simplestever' ),
		) );

	else :
		_e( 'Nothing here.', 'simplestever' );
	endif;
	?>
	<?php wp_footer(); ?>
</body>
</html>