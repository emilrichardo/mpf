<?php // get_header(); ?><!-- HEADER ########################-->

<?php include("includes/nav-intranet.php") ?>
<style type="text/css" media="screen">
  footer .enlaces, footer .sfco{
    display: none!important;
  }
</style>




<div class="bg-white pb-5">
    <div class="container">

      <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
  <?php echo get_post_meta(get_the_ID(), 'alerta-com', TRUE); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

     

  <div class="lead excerpt text-center"><?php echo do_shortcode('[types field="bajada"]'); ?></div>

          
          

          <div class="feature-single <?php echo do_shortcode('[types field="ocultar-feature"]'); ?>">
            <?php the_post_thumbnail('large', array('class' => 'img-fluid w-100', 'title' => get_the_title() )); ?>
          </div>






    <div class="page-title  text-center py-4">
            
            <div class="alert alert-warning d-none">
              Atención, este contenido solo puede ser visto a través de la red local del MPF de Santiago del estero. La información es exclusiva para el personal. Se prohibe la divulgación de la misma. 
            </div>
          </div>   
  
      <div class="row text-center justify-content-center">

        <div class="col-12 col-lg-8">
          
          <!-- <hr> -->
                  
  
          <?php 
  // the query
  $wpb_all_query = new WP_Query(
    array(
      'post_type'=>'post', 
      'category_name'  => 'comunicacion-institucional',
      'post_status'=>'publish', 
      'posts_per_page'=>4,  
      
          )
    ); ?>

  
  <?php if ( $wpb_all_query->have_posts() ) : ?>
          <div class="noticias-list">

            <div class="row"> 
  
            <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
  
            <div class="col-lg-6">
              <div class="bg-light item-noticia mb-3">                 
                    <div class="feature">
                      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium' , array('class' => 'img-fluid img-wide')); ?></a>
                    </div>
                  
                  
                    <div class="caption text-md-left py-3 px-md-3">
                      <span><span class="mes"><?php the_time('M'); ?></span>
               <span class="anio"><?php the_time('Y'); ?></span></span>
              
                      <a href="<?php the_permalink() ?>"  class="text-dark"><h5 class="fw-light"><?php the_title(); ?></h5></a>
              
                      <a href="<?php the_permalink() ?>" class="btn btn-outline-secondary ">Ver más <i class="fa fa-angle-right "></i></a>
                    </div>              
              </div><!-- item --> 
            </div>
            
            <?php endwhile; ?>
            </div>
         
          </div><!-- noticias-list -->
            <?php wp_reset_postdata(); ?>
  
  <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  
  
        </div><!-- 8 col -->

        <div class="col-12 col-lg-4">
          <a href="<?php echo home_url('/'); ?>comunicacion-institucional/descargas/" class="bg-dark d-block rounded px-5 py-3 text-light">
            <h2><i class="fa fa-download"></i> Descargas</h2>
            <small>Descarga de notas, documentos, permisos, peticiones,etc.</small>
          </a> 
          <a href="<?php echo home_url('/'); ?>comunicacion-institucional/numeros-internos" class="bg-info d-block rounded px-5 py-3 text-dark mt-3">
            <h2><i class="fa fa-phone-square mr-3"></i>Internos</h2>            
          </a>
          
            <div class="bg-white rounded px-4 py-3 mt-3">
              <h3><i class="fa fa-clock-o mr-3"></i>
                Mis fichadas</h3>
              <small><a href="http://personal.app.mpfsde.gob.ar" class="btn btn-success btn-block btn-block btn-sm" target="blank">Ir a sistema de registración <i class="fa fa-external-link ml-3"></i> </a> </small>
            </div>

            <a href="#" class="btn btn-light btn-block btn-sm mt-3 d-none">
              <i class="fa fa-print mr-2"></i>Solicitar impresión de imagenes a color
            </a>
          
        </div>
      </div><!-- end row -->
    </div>
  
  <div class="container text-center py-3 bg-light rounded ">
     <a class="btn btn-primary btn-lg mb-2" data-toggle="collapse" href="#calendar-cap" role="button" aria-expanded="false" aria-controls="calendar-cap">
            <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
    Ver calendario de capacitaciones
  </a>


  <div class="collapse" id="calendar-cap">
  <div class="card card-body">
    <div class="calendar-cap p-3">
      <iframe src="https://calendar.google.com/calendar/b/1/embed?showNav=0&amp;height=800&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=bpersldu4mhebon4v835s4vq68%40group.calendar.google.com&amp;color=%2323164E&amp;ctz=America%2FNew_York" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
  </div>
</div>
  </div>
    
  </div>


<hr>
<!-- FOOTER ########################--> 
<?php get_footer(); ?> 