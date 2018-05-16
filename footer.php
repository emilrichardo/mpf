<footer class="py-5">
		<div class="container">
			<section class="enlaces">
				<div class="row">
					<div class="col-12 col-md-6  col-lg-4">
						<ul class="lead links-main">
							<li><a href="<?php echo home_url('/'); ?>el-ministerio/preguntas-frecuentes">Preguntas frecuentes</a></li>
							<li><a href="<?php echo home_url('/'); ?>el-ministerio/circunscripciones/">Circunscripciones Judiciales</a></li>
							<li><a href="<?php echo home_url('/'); ?>el-ministerio/">Sobre El Ministerio</a></li>
						</ul>
					</div>
					<div class="col-12   col-lg-8">
						<div class="row mt-5 mt-lg-0">
							<div class="col-11 col-md-3  col-lg-3">
								<h5>Menú principal</h5>
								<ul>
									<li><a href="<?php echo home_url('/'); ?>el-ministerio">Institucional</a></li>
									<li><a href="<?php echo home_url('/'); ?>noticias">Noticias</a></li>
									<li><a href="<?php echo home_url('/'); ?>contacto">Contacto</a></li>
								</ul>
							</div>
							<div class="col-11 col-md-5  col-lg-5">
								<h5>Enlaces Judiciales</h5>
								<ul>
									<li><a target="blank" href="http://www.jus.gob.ar/">Ministerio de Justicia de la Nación</a></li>
									<li><a target="blank" href="https://www.mpf.gob.ar/">Ministerio Público Fiscal de la Nación</a></li>
									<li><a target="blank" href="http://www.jussantiago.gov.ar/jusnueva/index.php">Poder Judicial de Santiago del Estero</a></li>
								</ul>
							</div> 
							<div class="col-11 col-md-4  col-lg-4">
								<h5>Enlaces de interés</h5>
								<ul>
									<li><a target="blank" href="http://www.afip.gob.ar/sitio/externos/default.asp">AFIP - Administración Federal</a></li>
									<li><a target="blank" href="http://legislaturasde.gob.ar/">Legislatura de Santiago del Estero</a></li>
									<li><a target="blank" href="http://www.sde.gov.ar/">Sitio Oficial de Santiago del Estero</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="sfco py-5">				
				<div class="bg-dark text-light rounded p-5 text-center">
					<h3 class="d-inline-block">Sistema Federal de Comunicaciones Policiales</h3>
					<a href="https://sifcop-consultas.minseg.gob.ar/login" class="btn btn-success ml-md-5 btn-lg" target="blank">
						Ingresar al sistema <i class="fa fa-external-link"></i>
					</a>
					
				</div>				
			</section>
			<section class="copy py-5 text-lg-left text-center">
				<div class="row middle-xs justify-content-center">
					<div class="col-12  col-lg-4 center-xs start-md">
						<img class="img-wide img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/logo-mpf.svg" alt="">
					</div>
					<div class="col-12  col-lg-3 col-md-offset-1 center-xs start-md">
						<p><span><i class="fa fa-phone-square"></i> (0385) 4504700</span><br> <br>
							<span>
								<span><i class="fa  fa-map-marker"></i> </span> Yrigoyen y Chaco <br> Santiago del Estero Capital
							</span></p>
					</div>
					<div class="col-12 col-md-5  col-lg-4 center-xs start-md">
						<small>Sitio web, desarrollado por el área de Informatica y el área de Comunicaciones del Ministerio Público Fiscal de Santiago del Estero - República Argentina - Año 2017</small>
					</div>
				</div>
			</section>
		</div>
	</footer>
	

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/scripts/bootstrap/bootstrap.min.js"></script>
	

	<!-- Sliders -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/scripts/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/scripts/sliders.js"></script>



<script>
  $(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });

});
</script>


	