<!DOCTYPE html>
<html lang="es">
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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">

	<script src="https://use.fontawesome.com/9d068983ec.js"></script>
	

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
	

	<!-- Scripts-->
	

<!-- Cambiar el color por #101116 -->
<meta name="theme-color" content="#090921">

<?php wp_head(); ?>
<script>var $ = jQuery.noConflict();</script>

<meta name="google-site-verification" content="1CCvqxq5fJ1AFHvGp-1dyHrxPzCEt_FO8ZRdzmtzYdU" />

</head>

<body <?php body_class(); ?>>

	<?php include("includes/nav.php") ?>
