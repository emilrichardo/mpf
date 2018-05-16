<?php get_header(); ?><!-- HEADER ########################-->  

<div class="margin-body"  data-spy="affix" data-offset-top="90"></div>


  <div class="container">
 <ol class="breadcrumb my-3 bg-white text-uppercase d-flex align-items-center" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</ol>




 
  
   
  
      <div class="row text-center justify-content-center">
        <div class="col-12 col-md-10">
          <div class="page-title">
             <?php
          the_archive_title( '<h1>', '</h1>' );
          
        ?>
            <span class="center-square"></span>
          </div>
          <hr>



          


  
          
  
 
          <div class="clipping-list mt-5 ">
            
  
 
   
            <?php   if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <div class="bg-light item-noticia clearfix">              

                 
            <!-- the loop -->
                
                <div class="col-12 col-md-12 ">

                  <div class="bg-light my-3 p-5 rounded">
                    <div class="caption text-md-left py-1 pr-md-4">
                      <div>Publicado el día <?php the_time('j  F, Y'); ?></div>

                    
                     <h3 class="fw-light"><?php the_title(); ?></h3>

                    
                      <span class="badge badge-secondary"><?php echo get_the_term_list( $post->ID, 'medio', '<strong>Medio:</strong> ', ', ' ); ?></span>
                      <span class="badge badge-secondary"><?php echo get_the_term_list( $post->ID, 'tipo-delito', '<strong>Delito:</strong> ', ', ' ); ?></span>
                      <span class="badge badge-secondary"><?php echo get_the_term_list( $post->ID, 'circunscripcion-cliping', '<strong>Circunscripción:</strong> ', ', ' ); ?></span>

                      
                      

                      
                     
                    
                      <a target="blank" href="<?php echo do_shortcode('[types field="url-clipping"]'); ?>" class="btn btn-info btn-block mt-3">Ir a enlace <i class="fa fa-external-link-square"></i></a>
                    </div>
                     </div>
                  </div>
                
             
            </div><!-- item --> 
            <?php endwhile; // end of the loop. ?>
            
           
  
         
          </div><!-- noticias-list -->
            
  
 
  
  
        </div><!-- 8 col -->
      </div><!-- end row -->
    </div>




   
  

     

<?php get_footer(); ?>