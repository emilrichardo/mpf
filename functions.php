<?php //paginador

 ?>
<?php //buscar solo posts
function SearchFilter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}
add_filter('pre_get_posts','SearchFilter');
?>
<?php
//ver mas*********************************************
function vermas() {
	return ' <a class="more" href="'. esc_url( get_permalink() ) . '">' . __( '...' ) . '</a>';
}
function auto_excerpt_more( $more ) {
	return vermas();
}
add_filter( 'excerpt_more', 'auto_excerpt_more' );
function custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'custom_excerpt_more' ) ;
function longitud_excerpt($length) {
    return 24;
}
add_filter('excerpt_length', 'longitud_excerpt');
?>
<?php
    register_sidebar(array(
        'name' => 'Sidebar',
		'id' => 'secundary',
		'before_widget' => '<aside class="widget widget-sidebar">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
    ));
?>
<?php
///sidebar widgets ***** este codigo es para personalizar el sidebar y sus widgets / sidebar, top, bottom
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'secundary',
		'before_widget' => '<aside class="widget widget-sidebar">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => 'Top',
		'id' => 'top',
		
	) );
	
	register_sidebar( array(
		'name' => 'Bottom',
		'id' => 'bottom',
		'before_widget' => '<aside class="widget widget-sidebar">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>
<?php //este codigo es para agregar imagen destacada al theme***********
add_theme_support( 'post-thumbnails' );?>
<?php //poner logo al escritorio
function custom_login_logo() {
        echo '<style type="text/css">
        h1 a { background-image: url('.get_bloginfo('template_directory').'/images/logo.png) !important;  background-size: 100%!important;height: 204px!important;  width: 300px!important; }
        </style>';
}
add_action('login_head', 'custom_login_logo');?>
<?php //menues personaliza
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'secondary' => __( 'Menú secundario' ),
      'intranet' => __( 'Menú interno' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
 ?>
 <?php // cropear imagen
if(false === get_option("medium_crop")) {
    add_option("medium_crop", "1");
} else {
    update_option("medium_crop", "1");
}
  ?>
  <?php //remover margen de la barra wordpress
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

// excerpt para paginas
add_post_type_support( 'page', 'excerpt' );

   ?>