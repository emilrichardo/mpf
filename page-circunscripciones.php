<?php get_header() ?>

	
	
	
	<div class="container">
		
		<div class="row justify-content-center text-center">
			<div class="col-12 col-md-9">
					<div class="page-header mt-5">
						<h1 class="display-5 fw-light">Mapa de Circunscripciones Judiciales</h1>
						<hr>
						<span class="center-square"></span>
					</div>
					<p class="lead">
						
						El MPF de Santiago del Estero se encuentra divido en seis Circunscripciones Judiciales (<a href="<?php echo home_url('/'); ?>circunscripcion/santiago-del-estero-capital">Capital</a>, 
						<a href="<?php echo home_url('/'); ?>circunscripcion/la-banda">La Banda</a>, 
						<a href="<?php echo home_url('/'); ?>circunscripcion/las-termas-de-rio-hondo">Las Termas de Río Hondo</a>, 
						<a href="<?php echo home_url('/'); ?>circunscripcion/anatuya">Añatuya</a>, 
						<a href="<?php echo home_url('/'); ?>circunscripcion/frias">Frías</a> y 
						<a href="<?php echo home_url('/'); ?>circunscripcion/monte-quemado">Monte Quemado</a>) que a su vez cada una abarca uno o mas departamentos de la provincia. 
					</p>
            </div><!-- 10 col -->         
        </div><!-- end row -->         
    </div>


    <section id="circ-map" class="bg-dark py-5">
    	<a href="#mapa">
			<span class="scroll-arrow-circ">
				<i class="fa fa-map-marker"></i>
			</span>
		</a> <!-- scroll arrow -->
		<div class="row justify-content-center padd-section my-5">
			<div class="col-10 col-md-10">
				<div class="row start-xs end-md">
					<div class="col-12 col-md-4 text-info hidden-xs">
						<ul class="control-map text-center text-md-right">
							<li>Santiago del Estero</li>
							<li>La Banda</li>
							<li>Las Termas de Río Hondo</li>
							<li>Añatuya</li>
							<li>Frías</li>
							<li>Monte Quemado</li>
						</ul>
					</div> <!-- map slider control -->
					<div class="col-12 col-md-7">
						<div class="map-slider text-light text-left">
							<div class="slide-cslide">
								<div class="cslide-cont row">
									<div class="col-12 col-md-7">
										<h4>Circunscripción Judicial</h4>
										<h2>Santiago del Estero</h2>
										<p>El 3 de diciembre del año 2016 entró en vigencia el nuevo sistema en la circunscripción judicial Capital, una de las más grandes en cuanto a la cantidad de Departamentos que incluye: Alberdi, Atamisqui, Capital, Figueroa, Juan Felipe Ibarra, Loreto, Moreno, Ojo de Agua, Pellegrini, Quebrachos, Salavina, San Martín, Sarmiento, Silípica.</p>
										<a href="<?php echo home_url('/'); ?>circunscripcion/santiago-del-estero-capital" class="btn btn-outline-light btn-plus-left"><i class="fa fa-map-marker mr-2"></i> Ver circunscripción</a>
									</div>
									<div class="col-md-5 col-12 ">
										<div class="map"><img  class="<?php echo get_template_directory_uri(); ?>/img-wide img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/mapas-01.svg" alt=""></div>
									</div>
								</div>
							</div>
							<div class="slide-cslide">
								<div class="cslide-cont row">
									<div class="col-12 col-md-7">
										<h4>Circunscripción Judicial</h4>
										<h2>La Banda</h2>
										<p>El 13 de marzo del 2013 se inició la implementación del nuevo sistema procesal penal en la Circunscripción Judicial Banda, que comprende los departamentos Banda y Robles. 
En este segundo distrito judicial, el Ministerio Público contó con la adecuación de una estructura edilicia como el Centro Judicial Banda, que fue proyectado en base al nuevo sistema.</p>
										<a href="<?php echo home_url('/'); ?>circunscripcion/la-banda" class="btn btn-outline-light btn-plus-left"><i class="fa fa-map-marker mr-2"></i> Ver circunscripción</a>
									</div>
									<div class="col-12 col-md-5">
										<div class="map"><img  class="img-wide img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/mapas-02.svg" alt=""></div>
									</div>
								</div>
							</div>
							<div class="slide-cslide">
								<div class="cslide-cont row">
									<div class="col-12 col-md-7">
										<h4>Circunscripción Judicial</h4>
										<h2>Las Termas de Río Hondo</h2>
										<p>El 3 de agosto del año 2015 el sistema acusatorio fue inaugurado, junto con un moderno Centro Judicial, en Termas de Río Hondo. Dicha circunscripción que abarca los Departamentos Giménez y Río Hondo, fue la cuarta en contar en el nuevo sistema.</p>
										<a href="<?php echo home_url('/'); ?>circunscripcion/las-termas-de-rio-hondo" class="btn btn-outline-light btn-plus-left"><i class="fa fa-map-marker mr-2"></i> Ver circunscripción</a>
									</div>
									<div class="col-12 col-md-5">
										<div class="map"><img  class="img-wide img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/mapas-03.svg" alt=""></div>
									</div>
								</div>
							</div>
							<div class="slide-cslide">
								<div class="cslide-cont row">
									<div class="col-12 col-md-7">
										<h4>Circunscripción Judicial</h4>
										<h2>Añatuya</h2>
										<p>El 7 de marzo del año 2014 comenzó a regir el nuevo código procesal penal en la Circunscripción Judicial Añatuya, que involucra a los departamentos Avellaneda, General Taboada, Belgrano, Aguirre, Mitre y Rivadavia. 
Desde ese momento se inició una nueva etapa en la Justicia que implica un cambio cultural y una mayor cantidad de fiscales para intervenir en los diferentes casos, lo que posibilitará la celeridad en la resolución de los hechos</p>
										<a href="<?php echo home_url('/'); ?>circunscripcion/anatuya" class="btn btn-outline-light btn-plus-left"><i class="fa fa-map-marker mr-2"></i> Ver circunscripción</a>
									</div>
									<div class="col-12 col-md-5">
										<div class="map"><img  class="img-wide img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/mapas-05.svg" alt=""></div>
									</div>
								</div>
							</div>
							<div class="slide-cslide">
								<div class="cslide-cont row">
									<div class="col-12 col-md-7">
										<h4>Circunscripción Judicial</h4>
										<h2>Frías</h2>
										<p>En la Ciudad de Frías y en su jurisdicción, que comprende los Departamentos Choya y Guasayán, el Sistema Acusatorio se implementó a partir del 12 de diciembre del año 2011. Fue la primera circunscripción que contó con el nuevo sistema, y la pionera en defender, demostrar y reflejar el rol protagónico y trascendente de los fiscales en la sociedad.</p>
										<a href="<?php echo home_url('/'); ?>circunscripcion/frias" class="btn btn-outline-light btn-plus-left"><i class="fa fa-map-marker mr-2"></i> Ver circunscripción</a>
									</div>
									<div class="col-12 col-md-5">
										<div class="map"><img  class="img-wide img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/mapas-04.svg" alt=""></div>
									</div>
								</div>
							</div>
							<div class="slide-cslide">
								<div class="cslide-cont row">
									<div class="col-12 col-md-7">
										<h4>Circunscripción Judicial</h4>
										<h2>Monte Quemado</h2>
										<p>El 1 de febrero del 2017, el mapa provincial del nuevo sistema penal acusatorio se completó con la puesta en marcha del mismo en la jurisdicción de Monte Quemado y toda su zona de influencia en el departamento Copo.</p>
										<a href="<?php echo home_url('/'); ?>circunscripcion/monte-quemado" class="btn btn-outline-light btn-plus-left"><i class="fa fa-map-marker mr-2"></i> Ver circunscripción</a>
									</div>
									<div class="col-12 col-md-5">
										<div class="map"><img  class="img-wide img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/mapas-06.svg" alt=""></div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- map slider -->
				</div>
			</div><!-- columna 9 map slider -->
			
		</div>
    </section>
   

<!-- footer -->
<?php get_footer() ?>