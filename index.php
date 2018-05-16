<?php get_header(); ?>




<section class="welcome bg-primary  text-light h-100 py-md-4 py-5">

	<div class="fullscreen-bg ">
    <video loop muted autoplay  class="fullscreen-bg__video">
        
        <source src="<?php echo get_template_directory_uri(); ?>/images/video.mp4" type="video/mp4">
        
    </video>
</div>
		<div class="container py-md-4">
			<div class="row justify-content-center text-center">
				<div class="col-md-9 col-11 py-lg-5">
					<h2 class="font-weight-light">¡Bienvenidos al sitio web del Ministerio Público Fiscal de Santiago del Estero!</h2>
					<p class="lead my-4  mb-3 mb-md-0">
					Conozca los servicios que brinda el organismo tanto a las víctimas y testigos de delitos como a todos aquellos que quieran conocer el trabajo del MPF.</p>
					
						<div class="botones-welcome mt-md-4">
							<a href="<?php echo home_url('/'); ?>el-ministerio" class="btn  btn-outline-light mt-md-0 mt-2 d-md-inline-block d-block">
								<i class="fa fa-plus-circle"></i> Sobre el MPF
							</a>
							<a href="<?php echo home_url('/'); ?>el-ministerio/circunscripciones" class="btn  btn-outline-light mt-md-0 mt-2 d-md-inline-block d-block">
								<i class="fa fa-map-marker"></i> Circunscripciones
							</a>
							<a href="<?php echo home_url('/'); ?>noticias" class="btn  btn-success mt-md-0 mt-2 d-md-inline-block d-block">
								<i class="fa  fa-newspaper-o"></i> Sección Noticias
							</a>
						</div>
					
				</div>
			</div>
		</div>
	</section>

	<section class="bottom py-3 bg-succes text-light d-none">
		<div class="container">
			<?php wp_nav_menu( array( 
				'theme_location' => 'secondary', 
				'container' => 'span', 
				'menu_class'=>'navbar-nav-bottom text-uppercase d-md-flex justify-content-around mb-0', 
				'menu_id'=> 'nav-bottom',
				// 'before'=>'<i class="fa ico-nav"></i>', 
				'after'=> '<span class="span-line"></span>' ) ); ?>
		</div>
	</section>

	
<?php query_posts( array(
					    'category_name'  => 'notificacion',
					    'posts_per_page' => 1,
					    'orderby' => 'date',
					    
					      
					    
					) ); ?>
<?php   if ( have_posts() ) { ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class=" notificacion ">
	


<div class="alert alert-dismissible fade show bg-info  clearfix text-center py-3" role="alert">

	<button type="button" class="close d-none" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
	
<div class="container">

	<h5 class="font-weight-light"><?php echo do_shortcode('[types field="bajada"]'); ?>
  <h3 class="h5 card-title text-uppercase"><a href="<?php the_permalink(); ?>" class="text-primary"><?php the_title(); ?> <i class="fa fa-long-arrow-right"></i></a></h3>
			 

			 <a href="<?php the_permalink(); ?>" class="text-light d-none">Leer más</a></h5>
  
  
</div>

			
		
		
	</div>
</section>
<?php endwhile; // end of the loop. ?>
<?php } ?>


<!-- secciones -->
<?php include("secciones/noticias.php") ?>
<?php include("secciones/ministerio.php") ?>
<?php include("secciones/memorias.php") ?>

<!-- footer -->
<?php get_footer(); ?>