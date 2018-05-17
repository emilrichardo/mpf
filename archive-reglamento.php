<?php get_header(); ?><!-- HEADER ########################-->

<style type="text/css" media="screen">
  .parent-capitulos{
    background: #eee;
    color: #000!important;
    text-align: center;
    
  } 

  .parent-capitulos a{
    cursor: default;
    color: #000;
  } 

  .parent-capitulos  p{
    font-size: 1.5em!important;
    margin: 0;
    
  }

  .parent-capitulos p span,#id-4539{
    display: none!important;
  }


  small{}

</style>




<div class="container">
  <ol class="breadcrumb my-3 bg-white text-uppercase d-flex align-items-center" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</ol>

  <div class="page-title mt-3 fw-light text-center">
               <h1>REGLAMENTO INTERNO <br>
                <small>PODER JUDICIAL DE SANTIAGO DEL ESTERO</small></h1>
              <span class="center-square"></span>
            </div>


            <p class="alert alert-info"><strong>Régimen de licencias:</strong><br>
Para conocer el régimen de licencias completo, se aconseja la lectura del capítulo 3 y 5 o ante cualquier duda, puede consultar al área de RRHH. 
</p>
</div>

<?php 
  // the query
  $wpb_all_query = new WP_Query(
    array(
      'nopaging'  => false,
      'post_type'=>'reglamento', 
      'post_status'=>'publish', 
      'posts_per_page'=>5008,
      'order' => 'ASC',
       
        
      
          )
    ); ?>


     <?php if ( $wpb_all_query->have_posts() ) : ?>
          <div class="container">
            <ul class="list-group my-5"  id="accordion">
              
              
              <!-- the loop -->
                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
              
               
              <li id="id-<?php echo get_the_id(); ?>" 
              class="<?php global $post; echo $post->post_name; ?> list-group-item item<?php echo get_the_id(); ?> px-3 px-lg-5  parent-<?php
                  // Display a page parent's slug
                  $post_data = get_post($post->post_parent);
                  $parent_slug = $post_data->post_name;
                  echo $parent_slug;
                  ?>" aria-controls="heading<?php echo get_the_id(); ?>">
                 <p class="fw-bold  text-uppercase my-0">
                  <a  data-toggle="collapse" 
                      href="#<?php echo get_the_id(); ?>" aria-expanded="true" >
                    <?php the_title(); ?> 

                    <span class="badge badge-light float-right text-primary">
                      <i class="fa fa-plus"></i>
                      
                    </span>                   
                  </a>
                  
                 </p>
                 <div class="collapse bg-light px-2 py-1 px-lg-4 py-lg-4 ronded text-left my-3" id="<?php echo get_the_id(); ?>" aria-labelledby="heading<?php echo get_the_id(); ?>">
                    <small class="text-left"><?php the_content(); ?></small>
                    <a class="btn btn-primary btn-sm" href="<?php the_permalink() ?>"  class="text-primary float-right">Ver artículo</a>                  
                </div>
                  

                 
              </li>
            
              <?php endwhile; ?>
              
                     
            </ul>
          </div>
            <?php wp_reset_postdata(); ?>
  
  <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  
  
  
  
  </div>



<!-- FOOTER ########################--> 
<?php get_footer(); ?> 

