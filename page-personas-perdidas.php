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
          //single_term_title( '<h1>', '</h1>');
          //the_archive_description( '<div>', '</div>' );
        ?>
            <span class="center-square"></span>
          </div>
          <hr>



          
         


  
          
  
 
          
  
 
   
  
            
            
            <style type="text/css" media="screen">

              .card-img-top{
                height: auto!important;
              }

              .post-type-archive-personas-perdidas .card{
                max-width: 300px;
              }
            </style>

            <div class="card-deck">
               <?php   if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <!-- the loop -->
              <div class="card">

                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium' , ['class' => 'card-img-top']); ?></a>
                
                <div class="card-body">
                  <h5 class="card-title"><a href="<?php the_permalink() ?>"  class="text-dark"><?php the_title(); ?></a></h5>
                  <p class="card-text">Última vez visto: <?php echo(types_render_field('visto-por-ultima-vez' )); ?></p>
                  <p class="card-text"><small class="text-muted">Edad: <?php echo(types_render_field('edad' )); ?></small></p>

                 
                </div>
              </div>
              <?php endwhile; // end of the loop. ?>
              
            </div>
           
  
         
          
            
  
 
  
  
        </div><!-- 8 col -->
      </div><!-- end row -->
    </div>




   
  

     

<?php get_footer(); ?>