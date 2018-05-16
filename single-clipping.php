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



<div class="bg-light item-noticia clearfix">              

                 
            <!-- the loop -->
                
                <div class="col-12 col-md-12 <?php   // Get terms for post
                  $terms = get_the_terms( $post->ID , 'tipo-delito' );
                 // Loop over each item since it's an array
                  if ( $terms != null ){
                   foreach( $terms as $term ) {
                 // Print the name method from $term which is an OBJECT
                     print $term->slug ;
                 // Get rid of the other data stored in the object, since it's not needed
                     unset($term);
                   } } ?> <?php   // Get terms for post
               $terms = get_the_terms( $post->ID , 'medio' );
               // Loop over each item since it's an array
               if ( $terms != null ){
               foreach( $terms as $term ) {
               // Print the name method from $term which is an OBJECT
               print $term->slug ;
               // Get rid of the other data stored in the object, since it's not needed
               unset($term);
              } } ?>">

                  <div class="bg-light my-3 p-5 rounded">
                    <div class="caption text-md-left py-1 pr-md-4">
                      

           <span>Publicado el día: <?php the_time('j  F, Y'); ?></span>
           
                    
                     <h3 class="fw-light"><?php the_title(); ?></h3>
                    
                      <span class="badge badge-secondary"><?php echo get_the_term_list( $post->ID, 'medio', '<strong>Medio:</strong> ', ', ' ); ?></span>
                      <span class="badge badge-secondary"><?php echo get_the_term_list( $post->ID, 'tipo-delito', '<strong>Delito:</strong> ', ', ' ); ?></span>
                      <span class="badge badge-secondary"><?php echo get_the_term_list( $post->ID, 'circunscripcion-cliping', '<strong>Circunscripción:</strong> ', ', ' ); ?></span>
                      

                      
                     
                    
                      <a target="blank" href="<?php echo do_shortcode('[types field="url-clipping"]'); ?>" class="btn btn-info btn-block mt-3">Ir a enlace <i class="fa fa-external-link-square"></i></a>
                    </div>
                     </div>
                     
                  </div>
                
              
            </div><!-- item --> 
    
    
  </div>
<?php endwhile ;?>
    <?php endif ;?>










<!-- FOOTER ########################--> 
<?php get_footer(); ?> 

