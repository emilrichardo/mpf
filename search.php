<?php get_header(); ?>
<div class="bg-white">
    <div class="container">
  
     <ol class="breadcrumb bg-white  d-flex align-items-center" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
  </ol>



<div class="container"> 
<div class="row justify-content-center">
  <div class="col-10">
    <div class="list-group">  
    <?php
    $s=get_search_query();
    $args = array(
                    's' =>$s
                );
    
        // The Query
    $the_query = new WP_Query(  $args );
    if ( $the_query->have_posts() ) {
            _e("<h3 class='text-center mb-4'><span class='text-secondary'>Resultados de búsqueda para:</span> ".get_query_var('s')."</h3>");
            while ( $the_query->have_posts() ) {
               $the_query->the_post();
                     ?>
                        
            <div class="list-group-item">
              <a class="text-secondar" href="<?php the_permalink() ?>">           
                
               
                 <span class="mt-2"><?php the_title(); ?></span>
                 <span class="mr-2 badge badge-light"><?php echo get_the_date(); ?></span>
                
              </a>
            </div>
        
                     <?php
            }
        }else{
    ?>
            <h2 style='font-weight:bold;color:#000'>Sin resultados</h2>
            <div class="alert alert-info">
              <p>Lo sentimos, no se encontró resultados para su búsqueda, por favor, intentelo de nuevo con otras palabras claves. ¡Muchas gracias!</p>
            </div>
    <?php } ?>
    
    </div>



    <div class="box p-5 text-center mt-5">
      <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    
    <input type="text" class="form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'Realizar otra búsqueda...', 'twentyeleven' ); ?>" />
    <!-- <input class="btn btn-secondary" type="submit" class="submit" name="submit" id="searchsubmit" value="Buscar" /> -->
  </form>
    </div>
  </div>
</div>
</div>

<?php get_footer(); ?>