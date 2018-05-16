
<div class="top-nav bg-dark text-light py-1">
			<div class="container">
				<span class="tel-h mr-2"><i class="fa fa-phone-square text-success"></i> (0385) 4504700</span>
				<span class="dir-h hidden-xs ml-5 text-light d-none d-md-inline-block">
					<span class="badge badge-dark text-success"><i class="fa  fa-map-marker"></i> </span>
					<small>Yrigoyen 706, Santiago del Estero Capital</small>
				</span>
				<span class="social-h ml-5 text-light d-none d-md-inline-block">
					<a href="https://www.facebook.com/MPFSDE/" target="blank" class="btn btn-sm btn-info py-0  btn-primary text-info"><i class="fa fa-facebook mr-2 text-light"></i> Facebook</a>
				</span>
						<div class="float-right">
							<?php  global $current_user; wp_get_current_user(); ?>
								<?php if ( is_user_logged_in() ) {
									
									
							    	echo ' <span class="name-user text-secondary">' . $current_user->display_name . "\n". '</span> ';
							    	echo ' <a class="btn btn-primary btn-sm py-0 text-info"  href="http://www.mpfsde.gob.ar/wp-admin/"><i class="fa  fa-wordpress "></i></a> ';
							    	echo '<i class="fa  fa-sign-out text-primary"></i>';
							     	wp_loginout(home_url(''));
									} else {
										echo '<a  data-toggle="modal" href="#login-box" class="btn float-right btn-primary btn-sm py-0 px-3 text-info"><i class="fa fa-lock"></i>';
									    echo ' Iniciar sesión';
									    echo '</a>';
									}
								?></div>
			</div>
		</div><!-- end top-nav -->


<header id="header" class="header  sticky-top bg-white">
		<nav class="navbar navbar-expand-xl navbar-light bg-white">
		  
		  	
		  		<div class="container">
		  			
		  					  			<a class="navbar-brand mr-auto" href="<?php echo home_url('/'); ?>">
		  					  				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-mpf.svg" alt="">
		  					  				<h1 class="d-none">Ministerio Público Fiscal</h1>
		  					  			</a>
		  					  			
		  					  			<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		  					  				
		  					  			 <i class="fa fa-navicon"></i>
		  					  			</button>
		  					  							
		  					  			
		  								<div class="collapse navbar-collapse  ml-auto text-right" id="navbarNavDropdown">
		  							  		<?php wp_nav_menu( array( 
		  									'theme_location' => 'header-menu', 
		  									'container' => 'span', 
		  									'menu_class'=>'navbar-nav text-uppercase', 
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


	



