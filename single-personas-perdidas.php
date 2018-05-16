<?php get_header(); ?><!-- HEADER ########################-->

<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://example.com/';
}, false );
</script>

<div class="margin-body"  data-spy="affix" data-offset-top="90"></div>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



  <div class="container">

  <ol class="breadcrumb my-3  d-flex align-items-center" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</ol>



<div class="row justify-content-center text-center">   

<div class="col-lg-8"><h1><?php the_title(); ?></h1>
  <p class="font-weight-bold">Última vez visto: <?php echo(types_render_field('visto-por-ultima-vez' )); ?></p> 
  <?php the_post_thumbnail('medium' , ['class' => 'img-fluid']); ?> 
    
  <p class="font-weight-bold">Edad: <?php echo(types_render_field('edad' )); ?></p> 
  <p><?php the_content(); ?></p> 


  <a class="btn btn-primary" data-toggle="collapse" href="#formulario-pp" role="button" aria-expanded="false" aria-controls="formulario-pp">
    
      Sé algo acerca de <?php the_title(); ?>
    
  </a> 



  <div class="collapse bg-light py-4 px-5 mt-5" id="formulario-pp">
     <h3>Llena los campos con la información que sepás acerca de <?php the_title(); ?></h3>
  <?php echo do_shortcode('[contact-form-7 id="3451" title="Personas perdidas"]'); ?>
</div>


  <br>
 

      
  
     </div>
  </div>
<?php endwhile ;?>
    <?php endif ;?>










<!-- FOOTER ########################--> 
<?php get_footer(); ?> 

