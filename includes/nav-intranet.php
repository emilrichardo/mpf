
<!DOCTYPE html>
<html lang="es" style="margin-top: 0px!important">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109665268-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109665268-1');
</script>

	<meta charset="UTF-8">
	<title><?php  bloginfo('name'); ?>    <?php  wp_title('|',true);?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
	<meta name="description" content="">

	 <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" />

	<!-- Estilos css -->
	<link rel="stylesheet" title="style"  type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/theme.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
	
	
	<!-- Fuentes -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<script src="https://use.fontawesome.com/9d068983ec.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">	
	

	<!-- Scripts-->
	

<!-- Cambiar el color por #101116 -->
<meta name="theme-color" content="#090921">

<?php wp_head(); ?>
<script>var $ = jQuery.noConflict();</script>

<meta name="google-site-verification" content="1CCvqxq5fJ1AFHvGp-1dyHrxPzCEt_FO8ZRdzmtzYdU" />

</head>


<div class="top-nav bg-info text-dark py-1">
			<div class="container ">
				<span class="tel-h"><a href="<?php echo home_url('/'); ?>" class="btn btn-small btn-primary py-1"><small> <i class="fa fa-arrow-left mr-3"></i> www.mpfsde.gob.ar</small></a></span>
				<span class="ml-5"><strong>Intranet</strong> - Ministerio Público Fiscal de Santiago del Estero</span>
				
						
			</div>
		</div><!-- end top-nav -->


<header id="header" class="header  sticky-top">
		<nav class="navbar navbar-expand-xl navbar-light bg-white">
		  
		  	
		  		<div class="container">

		  			<a class="navbar-brand " href="<?php echo home_url('/'); ?>comunicacion-institucional">
		  					  				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-comunicaciones.png" alt="">
		  					  				<h1 class="d-none">Comunicación Institucional</h1>
		  					  			</a>
		  			
		  					  			
		  					  			<button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		  					  				
		  					  			 <i class="fa fa-navicon"></i>
		  					  			</button>
		  					  							
		  					  			
		  								<div class="collapse navbar-collapse   text-left" id="navbarNavDropdown">
		  							  		<?php wp_nav_menu( array( 
		  									'theme_location' => 'intranet', 
		  									'container' => 'span', 
		  									'menu_class'=>'navbar-nav ml-auto text-uppercase font-weight-bold', 
		  									'menu_id'=> 'nav',
		  									// 'before'=>'<i class="fa ico-nav"></i>', 
		  									'after'=> '<span class="span-line"></span>' ) ); ?>
		  								</div>
		  								
		  					  			
		  		</div>
		  		


		  		
		  	
		  
		</nav>
		
	</header><!-- /header -->


	<!-- Modal -->
	<div class="modal fade modal-login" id="login-box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	      	<h4 class="modal-title" >Iniciar sesión</h4>
	        <button type="button" class="close f-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        

	      </div>
	      <div class="modal-body p-5 rounded bg-light m-3">
	        <?php wp_login_form( $args
				 = array(
				 	'form_id'=> 'miform',
				 	'id_username'    => 'usuario_login',
				 	'label_username' => __( 'Usuario' ),
					'label_password' => __( 'Contraseña' ),
					'redirect'       => site_url('/wp-admin'),
				 	) 
				 ); ?> 

				 
	      </div>
	      
	    </div>
	  </div>
	</div> <!-- modal -->


	



