<section class="memorias bg-white py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-12">
					<ul>
						<li>
							<i class="fa fa-gavel"></i>
							<span>Memorias <br>
								<small>
								<a class="btn btn-light btn-sm" href="http://www.mpfsde.gob.ar/el-ministerio/memorias/">Ver memorias en PDF</a>
								
								</small>
							</span>
						</li>
						<li>
							<i class="fa fa-book"></i>
							<span>Resoluciones <br><small><a href="http://www.mpfsde.gob.ar/el-ministerio/resoluciones/">2015</a></small></span>
						</li>
						
					</ul>
				</div>
				<div class="col-lg-7 col-12">
					<img src="<?php echo get_template_directory_uri(); ?>/images/fachada10.jpg" alt="Fachada del Ministerio Público Fiscal" class="img-fluid">
				</div>
			</div>
		</div>
	</section>




	<?php query_posts( array(
						    
						    'post_type' => 'contrataciones',
						    'posts_per_page' => 2,
						      
						    
						) ); ?>
	<?php   if ( have_posts() ) { ?>
	<section class="contrataciones py-5 bg-info text-dark">
		<div class="container">
			
			<div class="row d-flex align-items-center justify-content-center">
				
				<div class="col-md-7 col-10">

					<h5 class="text-white">
						SECRETARÍA DE ADMINISTRACIÓN Y PRESUPUESTO
					</h5>
					
					<h2>Licitaciones y concursos de precios</h2>

	
				

				
				

					
					

					<ul class="contract-list">
						<?php while ( have_posts() ) : the_post(); ?>
						<li>
							<p class="badge badge-success clearfix">
								<?php $terms = get_the_terms($post->ID, 'contratacion');foreach($terms as $term){echo $term->name;} ?>
							</p>
							
							<p><?php the_title(); ?></p>
						</li>
						
						<?php endwhile; // end of the loop. ?>
						
					</ul>

					<a href="<?php echo home_url('/'); ?>contrataciones" class="btn btn-lg btn-primary mb-3 mb-md-0" ><i class="fa fa-plus-circle"></i> Ver todas</a>
					
				</div>
				<div class="col-md-3 col-10 text-center text-md-left order-1 order-md-2">
					<img src="<?php echo get_template_directory_uri(); ?>/images/licitacion.png" alt="">
				</div>
			</div>

		</div>
	</section>

	<?php } ?>

<section class="convenios py-5 text-center">
		<div class="container">
			<h3 class="h5 text-uppercase title-sec">CONVENIOS INSTITUCIONALES</h3>
			<hr>
			<a href="http://www.consejompra.org/"><img src="<?php echo get_template_directory_uri(); ?>/images/convenios/logo-convenio_01.jpg" alt=""></a>
			<a href="http://www.jus.gob.ar/"><img src="<?php echo get_template_directory_uri(); ?>/images/convenios/logo-convenio_02.jpg" alt=""></a>
			<a href="http://www.conicet.gov.ar/"><img src="<?php echo get_template_directory_uri(); ?>/images/convenios/logo-convenio_03.jpg" alt=""></a>
			<a href="https://www.mpf.gob.ar/"><img src="<?php echo get_template_directory_uri(); ?>/images/convenios/logo-convenio_04.jpg" alt=""></a>
			<a href="https://www.fiscalias.gob.ar/"><img src="<?php echo get_template_directory_uri(); ?>/images/convenios/logo-convenio_05.jpg" alt=""></a>
			<a href="http://www.unse.edu.ar/"><img src="<?php echo get_template_directory_uri(); ?>/images/convenios/logo-convenio_06.jpg" alt=""></a>
			<a href="http://newsite.ucse.edu.ar/"><img src="<?php echo get_template_directory_uri(); ?>/images/convenios/logo-convenio_07.jpg" alt=""></a>		
		</div>
	</section>
	
