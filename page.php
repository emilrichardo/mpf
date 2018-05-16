<?php get_header(); ?><!-- HEADER ########################-->


<div class="wrapper  bg-white">
  <div class="margin-body"  data-spy="affix" data-offset-top="90"></div>
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
  
  
    <div class="container">
  
    <ol class="breadcrumb my-3 bg-white  d-flex align-items-center" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
  </ol>
  
      
      <div class="row justify-content-center">
        <div class="col-md-10 col-12">
          <article>
            
  
            <div class="text-center ">
            <h5 class="text-info"> <?php echo do_shortcode('[types field="antetitulo"]'); ?></h5>
              <h1 class="font-weight-light mt-3 mb-3"><?php the_title(); ?></h1>
              

  
              <span class="center-square"></span>
            </div>
            <hr>
            
            <div class="lead excerpt text-center mt-4"><?php echo do_shortcode('[types field="bajada"]'); ?></div>
  
            
  
            <div class="feature-single <?php echo do_shortcode('[types field="ocultar-feature"]'); ?>">
              <?php the_post_thumbnail('large', array('class' => 'img-fluid', 'title' => 'Feature image')); ?>
            </div>
  
           <!--  <div class="ca-gallery text-center">
              <a href="#galeria" class="btn btn-success btn-img">
                Ver galería de imagenes
              </a>
            </div> -->
  
            
           
            <section id="galeria" class="galeria <?php echo do_shortcode('[types field="ocultar-galeria-slider"]'); ?>">
              <div class="galery-system <?php echo do_shortcode('[types field="opciones-de-galeria-y-slider"]'); ?>">
              <div  class="mt-3">
              <?php echo(types_render_field( 'galeria-de-fotos', array( 'separator' => '</div><div class="mt-3">' ) )); ?>
                
                </div>
              </div>
            </section>

            <section class="content-single text-left">
              <?php the_content(); ?>
  
            </section>
  
            
          </article>
  
         
  
          
        </div><!-- 8 col -->
      </div><!-- end row -->
    </div>
  <?php endwhile ;?>
      <?php endif ;?>
  
  
  
  
  </div>


<!-- FOOTER ########################--> 
<?php get_footer(); ?> 

