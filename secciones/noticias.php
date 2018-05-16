

<section class="noticias bg-light py-5 text-center text-md-left">
		<div class="container">
			<h3 class="h5 text-uppercase title-sec">Noticias y Novedades <a href="<?php echo home_url('/'); ?>noticias" class="btn-primary btn btn-sm ml-3 d-none d-md-inline-block">Ver todas <i class="fa fa-angle-right "></i></a> </h3>
			<hr>
			<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		
		<input type="text" class="form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'Buscar nota...', 'twentyeleven' ); ?>" />
		<!-- <input class="btn btn-secondary" type="submit" class="submit" name="submit" id="searchsubmit" value="Buscar" /> -->
	</form>

			<div class="row mt-2 mt-md-3">

				<!-- comienza super noticia -->

				<?php query_posts( array(
					    'category_name'  => 'novedades',
					    'posts_per_page' => 1,
					    'orderby' => 'date',
					    'post_type' => 'post',
					    'meta_key'   => 'wpcf-publicar-home', 
					  	'meta_value' => 'super-noticia',  
					    
					) ); ?>


					<?php   if ( have_posts() ) { ?>

						

				<div class="col-md-12 col-12 mb-5">
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="card card-super text-dark border-0 text-center ">
					 <div class="img-cont">
					 	 
					 	 <?php the_post_thumbnail('large', ['class' => 'card-img']); ?>
					 	 
					 </div>
					  <div class="card-img-overlay p-md-5 ">
					  	<div class="caption">
					  		<span><span class="mes"><?php the_time('M'); ?></span>
           					<span class="anio"><?php the_time('Y'); ?></span></span>
						    <h2 class="h1 card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						    
						    
						    <a href="<?php the_permalink(); ?>" class="btn btn-outline-light">Ver más <i class="fa fa-angle-right ml-2"></i></a>
					  	</div>
					  </div>
					</div>
					<?php endwhile; // end of the loop. ?>
				</div><!-- end intem -->
				<?php } ?>


				<!-- Comienza noticia principal -->
				<?php query_posts( array(
						    'category_name'  => 'novedades',
						    'posts_per_page' => 1,
						    'orderby' => 'date',
						    'post_type' => 'post',
						    'meta_key'   => 'wpcf-publicar-home', 
						  	'meta_value' => 'nota-principal',  
						    
						) ); ?>
						<?php   if ( have_posts() ) { ?>

				
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="nota-principal  col-12 ">
						<div class="card   text-dark border-0 text-center text-md-left" >
						  <div class="row align-items-center">
						  	<div class="img-cont col-md-6">
						  		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'card-img')); ?></a>
						  	</div>
						  	<div class="col-md-6 py-4 px-4 py-sm-0 px-sm-3  m-0">
						  		<span><span class="mes"><?php the_time('M'); ?></span>
						  		           					<span class="anio"><?php the_time('Y'); ?></span></span>
						  	  <h2 class="card-title h2 fw-light"><a href="<?php the_permalink(); ?>" class="text-dark font-weight-normal fw-light"><?php the_title(); ?></a></h2>
						  	  
						  	  <a href="<?php the_permalink(); ?>" class="btn btn-outline-dark">Ver más <i class="fa fa-angle-right ml-2"></i></a>
						  	</div>
						  </div>
						</div>
					</div><!-- end intem -->

				<?php endwhile; // end of the loop. ?>
					<?php } ?>



					<?php query_posts( array(
							    'category_name'  => 'novedades',
							    'posts_per_page' => 3,
							    'orderby' => 'date',
							    'post_type' => 'post',
							    'meta_key'   => 'wpcf-publicar-home', 
							  	'meta_value' => 'nota-secundaria',  
							    
							) ); ?>
						<?php   if ( have_posts() ) { ?>

						<div class="col-12 mt-5 mt-md-4 nota-secundaria">
							<div class="row d-flex align-items-stretch text-center">

						<?php while ( have_posts() ) : the_post(); ?>
				
							<div class="col-md-4 mt-3 mt-sm-0">
								<div class="card" >
								  <div class="img-cont">
								  	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'card-img')); ?></a>
								  </div>
								  <div class="card-body">
								  	<small><span><span class="mes"><?php the_time('M'); ?></span>
										<span class="anio"><?php the_time('Y'); ?></span>
									</span>
								</small>
								    <h4 class="card-title"><a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a></h4>
								    
								    <a href="<?php the_permalink(); ?>" class="btn btn-outline-dark">Ver más <i class="fa fa-angle-right ml-2"></i></a>
								  </div>
								</div>
							</div>

					
				<!-- end intem -->

				<?php endwhile; // end of the loop. ?>

						</div>
					</div>
					<?php } ?>





			<!-- Comienza noticia principal -->
				<?php query_posts( array(
						    
						    'posts_per_page' => 1,
						    'orderby' => 'date',
						    'post_type' => 'post',
						    'meta_key'   => 'wpcf-publicar-home', 
						  	'meta_value' => 'contenido-fijo',  
						    
						) ); ?>
						<?php   if ( have_posts() ) { ?>

				
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="contenido-fijo col-12 mt-4">
						<div class="card  bg-info  text-dark border-0 text-center text-md-left" >
						  <div class="row align-items-center">
						  	<div class="img-cont col-md-6 col-lg-5">
						  		<?php the_post_thumbnail('medium', array('class' => 'card-img')); ?>
						  	</div>
						  	<div class="col-md-6 col-lg-7 py-0 px-4  py-lg-5 px-lg-5 m-3 m-md-0">
						  		<h5 class="text-light"><?php echo do_shortcode('[types field="antetitulo"]'); ?></h5>
						  		
						  	  <h3 class="card-title h1 "><a href="<?php the_permalink(); ?>" class="text-dark font-weight-normal"><?php the_title(); ?></a></h3>
						  	  
						  	  <a href="<?php the_permalink(); ?>" class="btn btn-outline-dark">Ver más <i class="fa fa-angle-right ml-2"></i></a>
						  	</div>
						  </div>
						</div>
					</div><!-- end intem -->

				<?php endwhile; // end of the loop. ?>
					<?php } ?>		


			</div><!-- row -->

			
			<!-- termina loop de noticas -->



		</div><!-- container -->
	</section>


	 


        <!-- Comienza gacetilla de prensa -->
 			<?php query_posts( array(
					    'category_name'  => 'prensa',
					    'posts_per_page' => 6,
					    'orderby' => 'date',
					    'post_type' => 'post',
					    
					    //'meta_key'   => 'wpcf-publicar-home', 
					  	//'meta_value' => 'super-noticia',  
					    
					) ); ?>

					<?php   if ( have_posts() ) { ?>				

						
					
								<section class="gacetillas bg-dark">
									<div class="container">
										<div class=" col-12  galeria-home py-3">
											<h5 class="h6 text-uppercase title-sec text-light"><i class="fa  fa- fa-newspaper-o"></i>Gacetillas de prensa</h5>
										
										
											<div class="row mt-3" id="galery-home">
												<?php while ( have_posts() ) : the_post(); ?>
										
												<div class="col-md-4 col-lg-2 mt-2 mt-md-0">
												<a href="<?php the_permalink(); ?>">
													<div class="feature text-light bg-dark p-1 rounded">
														<?php the_post_thumbnail( array('class' => ' img-fluid rounded ')); ?>
														<small><?php the_title(); ?>	</small>						
													</div>
													
												</a>
													
												</div>
												
												
										
												<?php endwhile; // end of the loop. ?>
												
												
											</div><!-- ned row -->
											
										</div><!-- end gallery -->
									</div>
								</section>								
					<?php } ?><!-- termina gacetilla de prensa -->


       
<!-- call-action ver mas noticias -->
        <div class="ca-more-news bg-light pb-5">
          <div class="container text-center">
          	<div class="py-3 px-3 ">
          		<a href="<?php echo home_url('/'); ?>noticias" class="btn btn-primary btn-lg"><i class="fa fa-plus-circle mr-2"></i> Ver todas las noticias</a>
          	</div>
          </div>
        </div>

	<?php query_posts( array(
					    'category_name'  => 'galeria-de-fotos',
					    'posts_per_page' => 3,
					    'orderby' => 'date',
					    'post_type' => 'post',
					    //'meta_key'   => 'wpcf-publicar-home', 
					  	//'meta_value' => 'super-noticia',  
					    
					) ); ?>

					<?php   if ( have_posts() ) { ?>

					

						
	<section id="gal-cap" class="gal-cap bg-light py-2" >
		<div class="container">
			<div class="row between-xs">
				<div class=" col-12 col-lg-6 galeria-home">
					<h4 class="h5 text-uppercase title-sec"><i class="fa  fa-camera"></i>Galería de fotos</h4>


					<div class="row mt-3" id="galery-home">
						<?php while ( have_posts() ) : the_post(); ?>

						<div class="col-12 col-md-4">
						<a href="<?php the_permalink(); ?>">
							<div class="feature text-secondary bg-white p-1 rounded">
								<?php the_post_thumbnail( array('class' => ' img-fluid rounded ')); ?>
								<small><?php the_title(); ?>	</small>						
							</div>
							
						</a>
							
						</div>
						
						

						<?php endwhile; // end of the loop. ?>
						
						
					</div><!-- ned row -->
					
				</div><!-- end gallery -->

				
						<?php } ?>


				<?php query_posts( array(
					    'category_name'  => 'capacitacion',
					    'posts_per_page' => 1,
					    'orderby' => 'date',
					    'post_type' => 'post',
					    //'meta_key'   => 'wpcf-publicar-home', 
					  	//'meta_value' => 'super-noticia',  
					    
					) ); ?>

					<?php   if ( have_posts() ) { ?>

					<?php while ( have_posts() ) : the_post(); ?>

				<div class="col-12 col-lg-6 capacitacion mt-4 text-center text-md-left">
					<div class="row align-items-center">
						<div class="col-12 col-md-5">
							<div class="feature">
<a href="<?php the_permalink(); ?>"><img  src="<?php echo get_template_directory_uri(); ?>/images/capacitacion.svg" alt=""></a>							</div>
						</div>
						<div class="col-12 col-md-7">
							<a href="<?php the_permalink(); ?>"  class="text-secondary"><!-- <span>30 de agosto y 1 de septiembre</span> -->
								<h4><?php the_title(); ?></h4>
							</a>
						</div>
					</div>
				</div><!-- end capacitacion -->
				<?php endwhile; // end of the loop. ?>
						<?php } ?>
			</div><!-- end row -->
		</div><!-- end container -->
	</section><!-- end galeria y capacitacion -->


<?php query_posts( array(
					    'category_name'  => 'fiscalias-moviles',
					    'posts_per_page' => 1,
					    'orderby' => 'date',
					    'post_type' => 'post',
					    //'meta_key'   => 'wpcf-publicar-home', 
					  	//'meta_value' => 'super-noticia',  
					    
					) ); ?>


	<section class="turnos-f bg-light bg-primary py-5 text-center">
		<div class="row justify-content-center">
			<div class="col-lg-5 col-11">
				<div class="card">
				  <div class="card-header">
				    FISCALES DE TURNO – 2017
				  </div>
				  <div class="card-body">			    
				    <h3><i class="fa fa-calendar mb-2"></i> Calendario de Turnos Fiscales</h3>
				    
				    <a href="<?php echo home_url('/'); ?>el-ministerio/calendario-de-turnos-fiscales" class="btn btn-primary btn-block btn-lg">Ver calendario completo <i class="fa fa-plus-circle ml-2"></i></a>
				  </div>
				</div>
			</div>
		</div>
	</section>






					

 			