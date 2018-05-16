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

    <div class="page-title text-center ">
      <h4>Artículo: <?php echo(types_render_field( 'articulo' )); ?></h4>
      <h1 class="font-weight-light mt-3"><?php the_title(); ?></h1>
      
    </div> 

        
    <h5 class="text-center my-4"><?php echo do_shortcode('[types field="bajada"]'); ?></h5>
    <p><?php echo do_shortcode('[types field="reglamento"]'); ?></p>

    <div class="text-center py-5">
      <a class="my-3 btn btn-info btn-lg" href="<?php echo(types_render_field('documento')); ?>"><i class="fa fa-download mr-3"></i>Descargar Documento
      </a>
    </div>
    
    
  </div>
<?php endwhile ;?>
    <?php endif ;?>










<!-- FOOTER ########################--> 
<?php get_footer(); ?> 

