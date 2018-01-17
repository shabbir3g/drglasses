<?php 
/*
Template Name: Contact Page
*/
get_header(); ?>



	<?php $banner_image_contact = get_field('banner_image_contact'); 
	if($banner_image_contact): ?>
	<div class="banner" style=" background: transparent url(<?php echo $banner_image_contact['url'];  ?>) no-repeat center center;
	height:210px;"></div>
	<?php endif; ?>

         <div class="main-content">
            <div class="container">
               <div class="row">
                  <div id="content" class="main-content-inner col-sm-16">
                     <article id="post-136" class="post-136 page type-page status-publish hentry">
                        <header class="page-header">
                           <!--div class="breadcrumb_servizi"> I nostri servizi > Contattaci </div-->
                           <h1 class="page-title"><?php the_title(); ?></h1>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                           </p>
						   <?php $call_center_title = get_field('call_center_title'); 
							if($call_center_title): ?>
                           <h3 class="widget-title-form"><?php echo $call_center_title; ?></h3>
						   <?php endif; ?>
                           <div class="new_banner_numero_verde">
						   
						   							  
								<?php $number = get_field('number'); 
							if($number): ?>
                              <div class="image_n_v_2"><img src="<?php echo get_template_directory_uri(); ?>/images/n_v.jpg"/></div>
							 
                              <div class="numero_n_v_2"><?php echo $number; ?></div>
							   <?php endif; ?>
							<?php $call_center_title = get_field('call_center_title'); 
							if($call_center_title): ?>
                              <div class="chiama_n_v_2"><?php echo $call_center_title; ?></div>
							 <?php endif; ?>

							  <?php $day_to_day = get_field('day_to_day'); 
							if($day_to_day): ?>
							<div class="orari_n_v_2"><img src="<?php echo get_template_directory_uri(); ?>/images/numero_orari.png">
								<?php echo $day_to_day; ?>
							  </div>
							<?php endif; ?>
							  <?php $day_only = get_field('day_only'); 
							if($day_only): ?>
                              <div class="orari_n_v_2_a">
								<?php echo $day_only;  ?>
							 
							  <?php endif; ?>
							  </div>
                           </div>
                           <p>
                           <div class="wpcf7" id="wpcf7-f135-p136-o1">
                              <div class="screen-reader-response"></div>

                                 <div class="container">
                                    <div class="row">
                                       <div class="col-xs-6">
									   
									  <?php echo do_shortcode('[contact-form-7 id="167" title="docteurglass form"]'); ?>
                                      </div>
                                        
									   <?php dynamic_sidebar('contact-sidebar'); ?>
                                         
                                       
                                       </p>
                                    </div>
                                 </div>
                           </div>
                           </p>
						   
						   <?php $section_title_sales = get_field('section_title_sales'); 
							if($section_title_sales): ?>
                           <h3 class="widget-title-form"><?php echo $section_title_sales; ?></h3>
						   <?php endif; ?>
						   
                           <div class="new_banner_contatti">
						   
						    <?php $number_title = get_field('number_title'); 
							if($number_title): ?>
                              <div class="image_n_v"><img src="<?php echo get_template_directory_uri(); ?>/images/n_v.jpg"/></div>
                              <div class="text_n_v"><?php echo $number_title; ?></div>
							 <?php endif; ?>
							 
							 <?php $sale_number = get_field('sale_number'); 
							if($sale_number): ?>
                              <div class="numero_n_v"><?php echo $sale_number; ?></div>
							<?php endif; ?>
							
							
							  <?php $schedule_title = get_field('schedule_title'); 
							if($schedule_title): ?>
                              <div class="chiama_n_v"><?php echo $schedule_title; ?></div>
							  
							 <?php endif; ?>
							 
							 <?php $schedule_time = get_field('schedule_time'); 
							if($schedule_time): ?>
                              <div class="orari_n_v"><img src="<?php echo get_template_directory_uri(); ?>/images/numero_orari.png"><?php echo $schedule_time; ?></div>
							  <?php endif; ?>
							  
                           </div>
                           <p>
                        </div>
                        <!-- .entry-content -->
                     </article>
                     <!-- #post-## -->
                  </div>
                  <!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
               </div>
               <!-- close .row -->
            </div>
            <!-- close .container -->
         </div>
         <!-- close .main-content -->
         
<?php get_footer(); ?>