<?php get_header(); ?><!-- HEADER ########################-->



<div class="margin-body"  data-spy="affix" data-offset-top="90"></div>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



  <div class="container">

  <ol class="breadcrumb my-3  d-flex align-items-center" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</ol>
    
    <div class="row justify-content-center">
      <div class="col-md-11 col-12">
        <article>
          

          <div class="page-title text-center ">
          
            
            

            <span class="center-square"></span>
          </div>
          
           <table class="table table-striped text-left rounded border  my-5 
              <?php   // Get terms for post
                  $terms = get_the_terms( $post->ID , 'tipo' );
                 // Loop over each item since it's an array
                  if ( $terms != null ){
                   foreach( $terms as $term ) {
                 // Print the name method from $term which is an OBJECT
                     print $term->slug ;
                 // Get rid of the other data stored in the object, since it's not needed
                     unset($term);
                   } } ?> <?php   // Get terms for post
               $terms = get_the_terms( $post->ID , 'contratacion' );
               // Loop over each item since it's an array
               if ( $terms != null ){
               foreach( $terms as $term ) {
               // Print the name method from $term which is an OBJECT
               print $term->slug ;
               // Get rid of the other data stored in the object, since it's not needed
               unset($term);
              } } ?>

              " >

                
                
                <thead>
                  <tr>
                    
                    
                    <th colspan="2"  class="text-center"><h5><?php $terms = get_the_terms($post->ID, 'contratacion');foreach($terms as $term){echo $term->name;} ?></h5></th>
                    
                  </tr>
                </thead>
                

                <tbody>
                  <tr>
                    
                    <td>Tipo y N°:</td>
                    <td><strong><?php echo do_shortcode('[types field="tipo-y-n"]'); ?></strong></td>
                    
                  </tr>
                  <tr>
                    
                    <td>Objeto:</td>
                    <td><h4 class="fw-light"><?php the_title(); ?></h4></td>
                    
                  </tr>
                  <tr>
                    
                    <td>Fecha de Apertura:</td>
                    <td><?php echo do_shortcode('[types field="fecha-de-apertura"]'); ?></td>
                    
                  </tr>
                  <tr>
                    
                    <td>Monto estimado:</td>
                    <td><?php echo do_shortcode('[types field="monto-estimado"]'); ?></td>
                    
                  </tr>
                  <tr>
                    
                    <td>Documentación:</td>
                    <td>  




                      





                      <a  href="<?php echo(types_render_field('documentacion')); ?>" target="blank">

                      <?php echo(types_render_field('documentacion-button', array(  'output'=> 'html' ) )); ?>

                        </a>

                        <a href="<?php echo(types_render_field('documentacion-2')); ?>" target="blank">

                      <?php echo(types_render_field( 'documentacion-button2', array( 'output'=> 'html'  ) )); ?>

                        </a>
                      

                      
                     


                      
                      
                    </td>
                    
                  </tr>
                </tbody>
              </table>

          
        </article>

       

        
      </div><!-- 8 col -->
    </div><!-- end row -->
  </div>
<?php endwhile ;?>
    <?php endif ;?>










<!-- FOOTER ########################--> 
<?php get_footer(); ?> 

