<?php get_header(); ?><!-- HEADER ########################-->  

<div class="margin-body"  data-spy="affix" data-offset-top="90"></div>

<img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/capacitacion.jpg" alt="">

  <div class="container">
 <ol class="breadcrumb my-3 bg-white text-uppercase d-flex align-items-center" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</ol>




  
   
  
      <div class="row text-center justify-content-center">
        <div class="col-12 col-md-10">
          



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



         
            
          
  
 
          <div class="noticias-list mt-5 ">
  
  <?php   if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <!-- the loop -->
   
  
            <div class="bg-white item-noticia clearfix">
              <div class=" row justify-content-center align-items-center d-flex ">
                <div class="col-12 col-md-6 clearfix text-center text-md-left">
                  <div class="feature">
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium' , ['class' => 'img-fluid img-wide']); ?></a>
                  </div>
                </div>
                <div class="col-12 col-md-6">
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
            <?php endwhile; // end of the loop. ?>
           
  
         
          </div><!-- noticias-list -->
            
  
 
  
  
        </div><!-- 8 col -->
      </div><!-- end row -->
    </div>




   
  

     

<?php get_footer(); ?>