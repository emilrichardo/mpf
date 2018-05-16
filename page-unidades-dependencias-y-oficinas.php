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
        <div class="col-md-11 col-12">
          <article>
            
  
            <div class="text-center ">
            <h5 class="text-info"> <?php echo do_shortcode('[types field="antetitulo"]'); ?></h5>
              <h1 class="font-weight-light mt-3 mb-3"> <?php the_title(); ?></h1>

              

  
              <span class="center-square"></span>
            </div>
           
            
            
  
            <div class="feature-single <?php echo do_shortcode('[types field="ocultar-feature"]'); ?>">
              <?php the_post_thumbnail('large', ['class' => 'img-fluid', 'title' => 'Feature image']); ?>
            </div>
  
          
           
            <section id="galeria" class="galeria <?php echo do_shortcode('[types field="ocultar-galeria-slider"]'); ?>">
              <div class="galery-system <?php //echo do_shortcode('[types field="opciones-de-galeria-y-slider"]'); ?>">
              <div>
              <?php echo(types_render_field( 'galeria-de-fotos', array( 'separator' => '</div><div class="mt-3">' ) )); ?>
                
                </div>
              </div>
            </section>
  
            
          </article>
  
         
  
          
        </div><!-- 8 col -->
      </div><!-- end row -->
    </div>




<section class="child-page py-3 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            
        
<?php $children = get_pages( 
    array(
        'sort_column' => 'menu_order',
        'sort_order' => 'ASC',
        'hierarchical' => 0,
        'parent' => $post->ID,
        'post_type' => 'page',
    ));

foreach( $children as $post ) { 
        setup_postdata( $post ); ?>
   
      <div class="col-md-11">
        <div class="row justify-content-center align-items-center my-3 bg-white rounded ">
            <div class="img-chid-page col-12  col-md-6 rounded  px-0 ">
                <?php  the_post_thumbnail( 'medium', array('class'=>'img-fluid w-100 ') );   ?>
                
            </div>
            <div class=" col-12 col-md-6 py-3 pl-md-5">
                <h3><?php the_title() ?></h3>
                <p><?php echo do_shortcode('[types field="bajada"]'); ?></p>
                        
        
        
                        <a href="<?php the_permalink() ?>" class="btn btn-outline-dark">Ver más <i class="fa fa-plus-circle ml-3"></i></a>
            </div>
            
            
            
            
        </div>
      </div>
    
<?php } ?>

           
        </div><!-- row -->
    </div><!-- container -->
 </section>

  <?php endwhile ;?>
      <?php endif ;?>
  
  
  
  
  </div>





<!-- FOOTER ########################--> 
<?php get_footer(); ?> 

