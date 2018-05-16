<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span><?php _e( 'Featured', 'twentysixteen' ); ?></span>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	


	<?php the_excerpt(); ?>

	<?php the_post_thumbnail(); ?>

	<div>
		<?php
			/* translators: %s: Name of current post */
			// the_content( sprintf(
			// 	__( 'Leer más <span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
			// 	get_the_title()
			// ) );

			// wp_link_pages( array(
			// 	'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
			// 	'after'       => '</div>',
			// 	'link_before' => '<span>',
			// 	'link_after'  => '</span>',
			// 	'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
			// 	'separator'   => '<span class="screen-reader-text">, </span>',
			// ) );
		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
