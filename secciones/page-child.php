<?php get_header() ?>

</header>
<!-- contenido de pagina ########################-->
 		 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>




<section class="page-content bg-light py-2">
	<div class="img-post-header ">
     <?php the_post_thumbnail( 'large',array('class'=>'img-fluid w-100') );   ?>   
    </div>
	<div class="container mt-3">

<div class="breadcrumb mt-3 bg-white"  typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>


		<div class="row justify-content-center pt-4">
			<div class="col-md-8">
				<h1 class="text-center mt-3"><strong><?php the_title() ?></strong></h1>
				<hr>
				<article>
					<div class="lead text-center my-5">
						<?php the_excerpt() ?>
					</div>
					<?php the_content() ?>
				</article>
			</div>
		</div>
	</div>
</section>



 		<!-- ######################## termina contenido de pagina -->



<section class="child-page py-3 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-md-10">
        
<?php $children = get_pages( 
    array(
        'sort_column' => 'menu_order',
        'sort_order' => 'ASC',
        'hierarchical' => 0,
        'parent' => $post->ID,
        'post_type' => 'page',
    ));

foreach( $children as $post ) { 
        setup_postdata( $post ); ?>
    <div class="row justify-content-center align-items-center my-3 bg-white">
        <div class="img-chid-page col-12  col-md-5 rounded  px-0 ">
            <?php the_post_thumbnail( 'medium', array('class'=>'img-fluid w-100') );   ?>
        </div>
        <div class=" col-12 col-md-7 py-3 pl-md-5">
            <h3><?php the_title() ?></h3>
                    <p class="lead"><?php the_excerpt() ?></p>


                    <a href="<?php the_permalink() ?>" class="btn btn-outline-dark">Ampliar <i class="fa fa-plus-circle ml-3"></i></a>
        </div>
        
        
        
        
    </div>
<?php } ?>
            </div>
        </div><!-- row -->
    </div><!-- container -->
 </section>



 <?php endwhile ;?>
        <?php endif ;?>

<?php get_footer() ?>