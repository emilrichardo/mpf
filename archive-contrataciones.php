<?php get_header(); ?><!-- HEADER ########################-->  



<div class="bg-light">
  
  
    <div class="container">
   <ol class="breadcrumb  text-uppercase d-flex align-items-center" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
  </ol>
  
  
  
  
    
     
    
        <div class="row text-center justify-content-center align-items-center">
          <div class="col-12 col-md-10">
            <div class="page-title">
               
              <span class="center-square"></span>
            </div>

            
            
                <h2>SECRETARÍA DE ADMINISTRACIÓN Y PRESUPUESTO</h2>
                
              <p>
               <i class="fa fa-map-marker text-info"></i> Calle Hipólito Yrigoyen N.º 706 4to Piso - <i class="fa fa-phone  text-info"></i> Tel. (0385) 450-4766  (int. 1467)  <br><i class="fa fa-envelope-o  text-info"></i> E-mail: contratacionesmp@jussantiago.gov.ar |
               <button type="button" class="btn btn-link btn-sm" data-toggle="modal" data-target="#modal-objetivos">
              Objetivos de la sección
            </button>
            <button type="button" class="btn btn-link btn-sm" data-toggle="modal" data-target="#modal-informacion"> <i class="fa fa-info-circle"></i>
              Información
            </button>
            </p>
            <!-- Button trigger modal -->
            
            <br>

            <div class="bg-succes runded p-3">
              <h4>Lo invitamos a participar de nuestras contrataciones.<br> Dejenos sus datos y nos contactaremos con usted.</h4>
              <button type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#proveedor-form">
                
              </button>
              <a href="http://www.mpfsde.gob.ar/ser-proveedor/" class="btn btn-primary">Ser proveedor</a>


            </div>
            

            
                     
  
  
    
           <div class="filtro text-left mt-3">
              <button class="btn btn-light filter-button" data-filter="all">Todas las contrataciones</button>
                     <button class="btn btn-light filter-button" data-filter="licitaciones">Licitaciones</button>
                     <button class="btn btn-light filter-button" data-filter="concurso-de-precios">Concurso de precios</button>
           </div>
    
   
            <div class="noticias-list mt-2 ">

              
    
    <?php   if ( have_posts() ) while ( have_posts() ) : the_post(); ?>




              <!-- the loop -->

              <div class="item filter bg-white border border-secondary py-3 px-2 px-md-5 rounded my-2 <?php   // Get terms for post
                  $terms = get_the_terms( $post->ID , 'tipo' );
                 // Loop over each item since it's an array
                  if ( $terms != null ){
                   foreach( $terms as $term ) {
                 // Print the name method from $term which is an OBJECT
                     print $term->slug ;
                 // Get rid of the other data stored in the object, since it's not needed
                     unset($term);
                   } } ?> 
                   <?php   // Get terms for post
               $terms = get_the_terms( $post->ID , 'contratacion' );
               // Loop over each item since it's an array
               if ( $terms != null ){
               foreach( $terms as $term ) {
               // Print the name method from $term which is an OBJECT
               print $term->slug ;
               // Get rid of the other data stored in the object, since it's not needed
               unset($term);
              } } ?>">
                <div class="row text-center text-md-left align-items-center">
                  <div class="col-md-6">
                    
                    
                    <span><small>Estado:</small> <?php echo(types_render_field( 'estado-contratacion', array( 'separator' => '' ) )); ?></span> 
                    <span><small>Tipo:</small> <span class="badge badge-light"><?php $terms = get_the_terms($post->ID, 'contratacion');foreach($terms as $term){echo $term->name;} ?></span></span>

                    <h2 class="my-3"><?php echo do_shortcode('[types field="tipo-y-n"]'); ?></h2>
                    
                    <h5><?php the_title(); ?></h5>
                    

                    
                  </div>
                  <div class="col-md-6">
                    <table class="table table-sm table-striped text-left border" >               
                
                
                

                <tbody>
                  
                  
                  <tr>
                    
                    <td><i class="fa  fa-calendar"></i> Fecha de Apertura:</td>
                    <td><?php echo do_shortcode('[types field="fecha-de-apertura"]'); ?></td>
                    
                  </tr>
                  <tr>
                    
                    <td><i class="fa  fa-calculator"></i> Monto estimado:</td>
                    <td><?php echo do_shortcode('[types field="monto-estimado"]'); ?></td>
                    
                  </tr>
                  <tr>
                    
                    <td colspan="2"><i class="fa  fa-file"></i> Documentación:  

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
                  </div>
                </div>
              </div>


              

              


              
     
    
              
              <?php endwhile; // end of the loop. ?>
             
    
           
            </div><!-- noticias-list -->
              
    
   
    
    
          </div><!-- 8 col -->
        </div><!-- end row -->
      </div>
  
  
  
  
   </div>


    <!-- Modal -->
            <div class="modal fade" id="modal-objetivos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Objetivos de la sección</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>En esta sección se publican los llamados a licitación, tanto públicas como privadas, y los concursos de precios que realiza la Secretaría De Administración y Presupuesto del Ministerio Público Fiscal de Santiago del Estero. 
            El objetivo primordial es informar al ciudadano y por ende a los proveedores respecto de los distintos procedimientos de compra que lleva a cabo el Ministerio Público Fiscal, con la finalidad de atender los gastos inherentes a la gestión operativa de este Ministerio, que son necesarias para el correcto funcionamiento del servicio de justicia, en todas las circunscripciones de la provincia de Santiago del Estero bajo los lineamientos del régimen legal vigente y en un marco de transparencia.
            Nuestra meta es fortalecer la concurrencia de oferentes para asegurar la obtención de los mejores precios y calidad en relación a las necesidades que originaron la contratación, velando por la igualdad de los oferentes, con la provisión oportuna a la mejor relación costo beneficio. 
            Si Usted no es proveedor habitual del Estado le invitamos a acercarse, ya que encontrará garantía de transparencia y asesoramiento para poder participar de los procedimientos de compra.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    
                  </div>
                </div>
              </div>
            </div>

             <!-- Modal -->
            <div class="modal fade" id="modal-informacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">INFORMACIÓN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Accediendo a la sección "Licitaciones" se podrán consultar:
"Contrataciones Históricos”: son procedimientos cuya apertura de ofertas ya se realizó y se encuentra en etapa de adjudicación o han sido adjudicados. <br>

"Contrataciones en Tramite”: son aquellos procedimientos que se encuentran en circuito administrativo a la espera de una fecha cierta para su llamado a contratación. <br>

"Contrataciones Vigentes”: son aquellos procedimientos vigentes con fecha cierta en los que aún no se ha llevado a cabo la apertura de las oferta.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    
                  </div>
                </div>
              </div>
            </div>
  



     

<?php get_footer(); ?>