
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php the_title( '<h1>', '</h1>' ); ?>
	

	<?php the_excerpt(); ?>

	<?php the_post_thumbnail(); ?>

	
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div><span >' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span>' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span>, </span>',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
	

	
</article><!-- #post-## -->
