<?php get_header(); ?><!-- HEADER ########################-->





  <?php 
  // the query
  $wpb_all_query = new WP_Query(
    array(
      'nopaging'  => false,
      'post_type'=>'reglamento', 
      'post_status'=>'publish', 
      'posts_per_page'=>8,
      'paged' => $paged,  
      'category__not_in' => array(358,14)
          )
    ); ?>


     <?php if ( $wpb_all_query->have_posts() ) : ?>
          <div class="container"><ul class="noticias-list mt-5">
              
              
              <!-- the loop -->
                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
              
               
              <li>
                 <a href="<?php the_permalink() ?>"  class="text-primary"><h4 class="fw-light"><?php the_title(); ?></h4></a>
              </li>
            
              <?php endwhile; ?>
              
                     
            </ul>
          </div>
            <?php wp_reset_postdata(); ?>
  
  <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>


<!-- FOOTER ########################--> 
<?php get_footer(); ?> 

