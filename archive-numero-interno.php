<?php // get_header(); ?><!-- HEADER ########################-->

<?php include("includes/nav-intranet.php") ?>
<style type="text/css" media="screen">
  footer .enlaces, footer .sfco{
    display: none!important;
  }
</style>


<div class="container">
  <ol class="breadcrumb my-3 bg-white text-uppercase d-flex align-items-center" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</ol>

  <div class="page-title mt-3 fw-light text-center">
               <h1>Guía de teléfonos y números internos<br>
                
              <span class="center-square"></span>
            </div>


            
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tabla-ni tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


<div class="container">
  <div class="bg-light rounded px-5 py-5 text-center mb-3 mt-5">
    <h3>Buscar número</h3>
    <input class="form-control  form-control-lg" id="myInput" type="text" placeholder="Buscar...">
  </div>
</div>

<?php 
  // the query
  $wpb_all_query = new WP_Query(
    array(      
      'post_type'=>'numero-interno', 
      'post_status'=>'publish',
      'posts_per_page'=>500,
      'order' => 'ASC',
      
          )
    ); ?>


     <?php if ( $wpb_all_query->have_posts() ) : ?>
          <div class="container" >
            <table class="table table-striped table-sm" id="tabla-ni">
              <thead>
                  <tr>
                    
                    <th class="pl-2" scope="col">Oficina</th>
                    <th scope="col">Piso</th>
                    <th scope="col">Área</th>                    
                    <th scope="col">N° Directo</th>
                    <th scope="col">N° Interno</th>
                  </tr>
                </thead>              
              
              
              <!-- the loop -->
                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
              
               
              <tr id="<?php echo get_the_id(); ?>"  
              class="<?php global $post; echo $post->post_name; ?>
              <?php   echo (types_render_field( 'piso' )); ?>">                 
                  
                    
                    <td class="pl-3"><?php the_title(); ?></td>
                    <td class="td-piso text-secondary"><?php echo(types_render_field( 'piso' )); ?></td> 
                    <td><?php echo(types_render_field( 'area' )); ?></td> 
                    
                    <td><?php echo(types_render_field( 'n-directo' )); ?></td> 
                    <td><strong class="pl-2"><?php echo(types_render_field( 'n-interno' )); ?></strong></td> 
                 
                  

                 
              </tr>
            
              <?php endwhile; ?>
              
                     
            </table>
          </div>
            <?php wp_reset_postdata(); ?>
  
  <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  
  
  
  
  </div>



<!-- FOOTER ########################--> 
<?php get_footer(); ?> 

