<?php get_header(); ?><!-- HEADER ########################-->



<div class="margin-body"  data-spy="affix" data-offset-top="90"></div>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



  <div class="container">

  <ol class="breadcrumb my-2  d-flex align-items-center" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</ol>
    
    <div class="row justify-content-center">
      <div class="col-md-10 col-12 pb-lg-4">
        <article>

                   

          <div class="page-title text-left">
          
            <h2 class="font-weight-light mt-3"><?php the_title(); ?></h2>

          
          </div>
          
          
         
          <section class="content-reglamento text-left my-lg-5">
            <?php the_content(); ?>

          </section>
         
          

          
        </article>

       

        
      </div><!-- 8 col -->
    </div><!-- end row -->
  </div>
<?php endwhile ;?>
    <?php endif ;?>










<!-- FOOTER ########################--> 
<?php get_footer(); ?> 

