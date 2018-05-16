<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>




<div class="margin-body"  data-spy="affix" data-offset-top="90"></div>

	<div  class="container">
	<div class="text-center">
		<img src="<?php echo get_template_directory_uri(); ?>/images/404.png" class="img-fluid">

				<h2 ><?php _e( 'Página no encontrada', 'twentythirteen' ); ?></h2>
	</div>	
	
	


		<div id="content" class="site-content" role="main">

		
			

			<div class="page-wrapper text-center">
				<div class="page-content">
					
					<br>
					<p><?php _e( ' Tal vez debería intentar una búsqueda', 'twentythirteen' ); ?></p>
					<br>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->






<?php get_footer(); ?>