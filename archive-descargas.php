<?php //get_header(); ?><!-- HEADER ########################-->  
<?php include("includes/nav-intranet.php") ?>
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
              <h1>Descargas: Documentos útiles</h1>
            <span class="center-square"></span>
          </div>
          <hr>



          


  
          
  
 
          <div class="row">
   
            <?php   if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                          

                 
            <!-- the loop -->
                
            <div class="col-lg-6">
              <div class="card text-center my-3">              
                  <?php // the_post_thumbnail( 'thumbnail' , array('class' => ' card-img-top')); ?>
                  <h5 class="card-header text-secondary"><small> <?php echo(types_render_field( 'articulo' )); ?></small></h5>
                  <div class="card-body">
                    
                    <h3 class="card-title py-2 text-dark"><?php the_title(); ?></h3>
                    <small class="card-text text-secondary">
                      <?php echo(types_render_field( 'bajada' )); ?>
                    </small>
                    <a class="btn btn-light btn-block" href="<?php the_permalink() ?>">
                       Ver detalles del documento </a>
                    
              
                    <a class="btn btn-info btn-block mt-2"  href="<?php echo(types_render_field('documento')); ?>">
                       <i class="fa fa-download mr-3"></i> Descargar Documento
                    </a>                  
              
                    
                  </div>
                  
                
              </div>
            </div>
                
             
             
            <?php endwhile; // end of the loop. ?>
            
           
  
         
          </div><!-- noticias-list -->
            
  
 
  
  
        </div><!-- 8 col -->
      </div><!-- end row -->
    </div>




   
  

     

<?php get_footer(); ?>