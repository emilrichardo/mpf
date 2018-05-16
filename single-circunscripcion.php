<?php get_header(); ?><!-- HEADER ########################-->



<div class="margin-body"  data-spy="affix" data-offset-top="90"></div>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



  <div class="container">

  <ol class="breadcrumb my-3  d-flex align-items-center" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</ol>
    
    <div class="row justify-content-center">
      <div class="col-md-11 col-12">
        <article>
          

          <div class="page-title text-center ">
          <h5><?php echo do_shortcode('[types field="antetitulo"]'); ?></h5>
            <h1 class="font-weight-light mt-3"><?php the_title(); ?></h1>
            <br>
            <a class="btn btn-outline-secondary   mb-2" href="tel:+54<?php echo do_shortcode('[types field="telefono-circunscripcion"]'); ?>">
              <i class="fa fa-phone-square color-info"></i> ¡LLAMAR! <strong> <?php echo do_shortcode('[types field="telefono-circunscripcion"]'); ?></strong></a>
              <br>
  
            <span class="text-secondary"><i class="fa fa-map-marker text-info"></i> <?php echo do_shortcode('[types field="direccion-cj"]'); ?></span>

            <span class="center-square"></span>
          </div>
          <hr>
          
          <div class="lead excerpt text-center"><?php echo do_shortcode('[types field="bajada"]'); ?></div>
          
          <br>

          <div class="feature-single <?php echo do_shortcode('[types field="ocultar-feature"]'); ?>">
            <?php the_post_thumbnail('large', array('class' => 'img-fluid rounded w-100', 'title' => 'Feature image')); ?>
          </div>

          
        </article>

      </div><!-- 8 col -->
    </div><!-- end row -->
  </div>

  <section class="dptos bg-light py-3 mt-3">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        
        <div class="col-md-3">
          <?php echo do_shortcode('[types field="img-mapa-circunscripcion" class="w-100"]'); ?>
        </div>
        <div class="col-md-5">
          <div class="row  align-items-center">
            <div class="col-md-6 text-center">
              <h2 class="bg-white rounded p-5">
                <i class="fa  fa-map-marker "> </i>
                <?php echo do_shortcode('[types field="cantidad-dptos"]'); ?> <br>
                <small>Dptos</small>
              </h2>
             </div>
            <div class="col-md-6">
              <?php echo do_shortcode('[types field="dptos"]'); ?>
            </div>
          </div> 
          
                  
        </div>
      </div>
    </div>
  </section>


   <section class="unidad-f  text-light py-5 ">
    <div class="container">
      <div class="row justify-content-end align-items-center">
        <div class="col-md-3 text-center text-md-center">
          <div class="profile rounded-circle mb-3 border border-dark"><?php echo do_shortcode('[types field="imagen-de-perfil" class="rounded "]'); ?></div> 

              <h4><?php echo do_shortcode('[types field="fiscal-coordinador"]'); ?></h4>
              <p class="text-info">Fiscal Coordinador/a</p>
        </div>
        <div class="col-md-8">
          <ul class="equipo row  rounded py-2 px-2">

            <li class="col-12 col-md-12 py-2 px-4 h4 fw-light text-info">Equipo de Fiscales</li>

            <li class="col-12 col-md-6 py-2 px-4"> 
              <?php  echo(types_render_field( 'fiscales', array( 'separator' => '</li><li  class="col-12 col-md-6 py-2 px-4">' ) )); ?>
              <?php

//echo types_render_field("imagen-fiscales", array("output"=>"html","alt"=> "%%ALT%%", "title"=> "%%TITLE%%", "width"=>"220","proportional"=>"true"));

?>
                
              </li>
          </ul> 
        </div>
      </div><!-- row -->


    </div><!-- container -->
          
 </section>

 <section class="calendar py-5">
 	<div class="container text-center d-flex justify-content-center">

 		<?php echo do_shortcode('[types field="fiscales-de-turno"]'); ?>
 	</div>
 </section>

<?php endwhile ;?>
    <?php endif ;?>


<section class="otras-circ">
  <div class="container">
    
  </div>
</section>








<!-- FOOTER ########################--> 
<?php get_footer(); ?> 

