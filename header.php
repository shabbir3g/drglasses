<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package drglasses
 */

?>

<!DOCTYPE html>
<!--[if IE 8]>         
<html class="no-js lt-ie9" lang="en">
   <![endif]-->
   <!--[if gt IE 8]><!--> 
   <html class="no-js" <?php language_attributes(); ?>>
      <!--<![endif]-->
      <head>
         <meta charset="<?php bloginfo( 'charset' ); ?>">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
         <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
         <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
         <![endif]-->
		 <?php wp_head(); ?>
      </head >
      <body <?php body_class(); ?>>
         <div class='notifications top-right'></div>
         <header id="masthead" class="site-header" role="banner">
            <div class="container">
               <div class="row">
                  <div class="site-header-inner col-sm-16">
				  
				  
                     <div id="logo">
						 <?php 
					  
						$logo = cs_get_option( 'logo-uploa' ); 
						$attachment_logo = wp_get_attachment_image_src( $logo, 'full' );
					
					  if($attachment_logo): ?>
                        <a href="<?php echo home_url(); ?>" title="Doctorglass" rel="home">
                        <img src="<?php echo $attachment_logo[0]; ?>" width="356" height="33" alt="Doctor Glass logo" title="Doctor Glass">
                        </a>
						<?php endif; ?>
                        <span class="callcenter">
						<?php echo cs_get_option('mobile-num'); ?>
                        </span>
                     </div>
                     
                  </div>
               </div>
            </div>
            <!-- .container -->
         </header>
         <!-- #masthead -->
         <nav id="primary-nav" class="site-navigation">
            <div class="container">
               <div class="row">
                  <div class="site-navigation-inner col-sm-16">
                     <div class="navbar navbar-default">
                        <div class="navbar-header">
                           <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
                           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           </button>
                        </div>
                        <!-- The WordPress Menu goes here -->
                        <div class="collapse navbar-collapse navbar-responsive-collapse">
						<?php wp_nav_menu(array(
							'theme_location'	=> 'main-menu',
							'menu_class'		=> 'nav navbar-nav',
							'menu_id'			=> 'main-menu',
							'fallback_cb'		=> 'default_menus',
							'walker'			=> new dr_class_nav_menus(),
						)); ?>
						
                        </div>
                     </div>
                     <!-- .navbar -->
                  </div>
               </div>
            </div>
            <!-- .container -->
			<?php $cer_image1 = cs_get_option('certificato-img1'); 
			if($cer_image1): ?>
            <div class="certificato_header">
               <a href="<?php echo cs_get_option('certificato-text1'); ?>">
               <img src="<?php echo $cer_image1; ?>" alt="Doctor Glass certificato servizio oro riparazione parabrezza 2016 2017" width="80">
               </a>
            </div>
			<?php endif; ?>
            <!--
               -->
			   
			   <?php $cer_image2 = cs_get_option('certificato-img2'); 
			if($cer_image2): ?>
            <div class="certificato_header_2">
               <a href="<?php echo cs_get_option('certificato-text2'); ?>">
               <img src="<?php echo $cer_image2;  ?>" alt="Doctor Glass certificato asso del franchising 2017" width="80">
               </a>
            </div>
			<?php endif; ?>
         </nav>
         <!-- .site-navigation -->
         <div class="banner"></div>


