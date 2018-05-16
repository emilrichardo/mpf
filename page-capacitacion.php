<?php get_header(); ?><!-- HEADER ########################-->


<div class="bg-white">
    <div class="container">
  
     <ol class="breadcrumb bg-white  d-flex align-items-center" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
  </ol>
  
      <div class="row text-center justify-content-center">
        <div class="col-12 col-md-10">
          <div class="page-title">
            <h1>Noticias</h1>
            <span class="center-square"></span>
          </div>
          <hr>



           <nav class="menu-filter my-2  rounded text-uppercase">
            <ul class="d-flex justify-content-around text-secondary  text-uppercase">
              
              <?php str_replace("title=\"View all posts filed under ","",
              wp_list_categories('use_desc_for_title=0&exclude=1,2,3,4,5,358,14&title_li=&hierarchical=1')); ?>
            </ul>
          </nav> 
          <hr>
  
          <?php 
  // the query
  $wpb_all_query = new WP_Query(
    array(
      'nopaging'  => false,
      'post_type'=>'post', 
      'post_status'=>'publish', 
      'posts_per_page'=>8,
      'paged' => $paged,  
      'category__not_in' => array(358,14)
          )
    ); ?>

  
  <?php if ( $wpb_all_query->have_posts() ) : ?>
          <div class="noticias-list mt-5">
  
  
            <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
  
            <div class="bg-white item-noticia clearfix">
              <div class=" row justify-content-center align-items-center d-flex ">
                <div class="col-12 col-md-7 col-lg-6 clearfix text-center text-md-left">
                  <div class="feature">
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium' , array('class' => 'img-fluid img-wide')); ?></a>
                  </div>
                </div>
                <div class="col-12 col-md-5 col-lg-6">
                  <div class="caption text-md-left py-5 pr-md-4">
                    <span><span class="mes"><?php the_time('M'); ?></span>
             <span class="anio"><?php the_time('Y'); ?></span></span>

                    <a href="<?php the_permalink() ?>"  class="text-dark"><h3 class="fw-light"><?php the_title(); ?></h3></a>

                    <a href="<?php the_permalink() ?>" class="btn btn-outline-secondary ">Ver más <i class="fa fa-angle-right "></i></a>
                  </div>
                </div>
              </div>
            </div><!-- item --> 
            <br>
            <?php endwhile; ?>
  
         
          </div><!-- noticias-list -->
            <?php wp_reset_postdata(); ?>
  
  <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  
  
        </div><!-- 8 col -->
      </div><!-- end row -->
    </div>
  
  
    
  </div>



<!-- FOOTER ########################--> 
<?php get_footer(); ?> 