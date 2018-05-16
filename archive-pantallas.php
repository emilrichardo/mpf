
<?php get_header(); ?><!-- HEADER ########################-->  
          
   <meta http-equiv="refresh" content="85" />

<style type="text/css" media="screen">
  header, footer, .top-nav {
    display: none;
  }

 


  body,html{height: 100%;}

.header-tv{

}

.tv-slider .bg-danger{
  background: #7F0000!important
}

.tv-mini .slick-track,.tv-mini .slick-list{
  overflow: visible!important;
}


.tv-slider,.slide-tv{
  height: 100%!important; 
  min-height: 800px;
}
.caption{
  
  padding: 35px;
}

h1{
  font-size: 45px;
  font-weight: 300;
}

.tv-img-mini img{
  width: 100%;
  height: auto;
  
}

.tv-img-mini {
  opacity: .8;
  z-index: 0;
  position: relative;
  
  
}

.tv-img-mini.slick-current{
  opacity: 1;
  z-index: 200!important;
  transform: scale(1.5); /* Igual que: scaleX(0.7) scaleY(0.7) */
  -webkit-box-shadow: 0 0 10px 10px rgba(.2,.2,.2,.2);
box-shadow: 0 0 10px 10px rgba(.2,.2,.2,.2);
}



.tv-slider{
  border-left: solid 2px #55A9B3;
 -webkit-box-shadow: 0 0 10px 10px rgba(.2,.2,.2,.2);
box-shadow: 0 0 10px 10px rgba(.2,.2,.2,.2); 
}

.img-slider{
overflow: hidden;
max-height: 400px;
  }

.onli-text .img-slider{
  display: none!important;
}

.onli-text h1{
  font-size: 78px;
}

.onli-text .caption{
  padding: 65px 75px;
}

.onli-text .caption p{
  font-size: 24px;
}

.onli-img .img-slider{
overflow: hidden;
max-height: 100%;
  }



.onli-img .caption{
  display: none!important;
}


.tag-tv .wpcf-field-value{
  position: absolute;
  background: #fff;
  color: #000;
  font-size: 24px;
  padding: 10px 35px;
}

</style>

<div class="row h-100 ">
    <div class="col-lg-2 bg-dark text-light text-center">
      <div class="header-tv p-4">        
        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/logo-mpf-w-v.svg" alt="">

        <small class="text-info mt-5"> www.mpfsde.gob.ar</small>
        
      </div>
    </div>
    
      <div class="col-lg-1 bg-info p-0">
       <div class="tv-mini">
        <?php $loop = new WP_Query( array(  'posts_per_page' => 1 ) ); ?>
        <?php   if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <div class="tv-img-mini"><?php the_post_thumbnail('thumbnail' ); ?></div>


               <?php endwhile; // end of the loop. ?>
                 
        </div>
    </div>     
   
         
    <div class="col-lg-9 p-0">
      <div class="tv-slider h-100  ">

        

          <?php   if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    <!-- the loop -->
        
                   <div class="slide-tv   h-100 <?php echo(types_render_field( 'formato' )); ?> <?php echo(types_render_field( 'colores-tv' )); ?>">
                    <span class="tag-tv"><?php echo(types_render_field( 'etiqueta-tv', array('output'=>'html') )); ?></span>
                       <div class="img-slider d-flex justify-content-center align-items-center"> <?php the_post_thumbnail('large' ); ?></div>                     
                         <div class="caption"><h1><?php the_title(); ?></h1>
                           <span class="text-info bg-dark rounded px-2 py-1 d-inline-block"><?php echo get_the_date(); ?></span> 
                           <div class="bg-ight">
                             <p><?php echo(types_render_field( 'descripcion-pantalla' )); ?></p>
                           </div>
                         </div>   
                   </div>
           
          
                    
                    <?php endwhile; // end of the loop. ?>
                   
          
                </div>
    </div>

    
            
              
    
   
    
    
          
        </div>
    


 <!-- FOOTER ########################--> 
<?php get_footer(); ?> 







   
  

     

