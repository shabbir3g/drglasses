<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package drglasses
 */

?>

	 <nav id="secondary-nav" class="site-navigation">
            <div class="container">
               <div class="row">
                  <div class="site-navigation-inner col-sm-10">
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
                        <div class="collapse navbar-collapse navbar-responsive-collapse-footer">
							<?php wp_nav_menu(array(
								'theme_location'	=> 'footer-menu',
								'menu_class'		=> 'nav navbar-nav',
								'menu_id'			=> 'secondary-menu',
								'fallback_cb'		=> 'default_footer_menus',
							)); ?>
						
                        </div>
                     </div>
                     <!-- .navbar -->
                  </div>
                  <div class="col-sm-2 text-right" id="fb_img" style="line-height: 40px;padding-right:20px;">
					<?php $facurl = cs_get_option('fac-url'); 
					if($facurl): ?>
                     <a href="<?php echo $facurl; ?>" target="_blank"><img src="<?php echo get_template_directory_uri();  ?>/images/FB-f-Logo__blue_29.png" border="0" style="height:22px"></a>
					 <?php endif; ?>
					 
					 
					 <?php $youtube = cs_get_option('youtube-url'); 
					if($youtube): ?>
                     <a href="<?php echo $youtube; ?>" target="_blank"><img src="<?php echo get_template_directory_uri();  ?>/images/YouTube-social-squircle_red_29x29.png" border="0" style="height:23.2px"></a>
					  <?php endif; ?>
					 
                  </div>
               </div>
            </div>
            <!-- .container -->
         </nav>
         <!-- .site-navigation -->
         <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="container">
               <div class="row">
                  <div class="site-footer-inner col-sm-16">
                     <div class="site-info">
						<?php echo cs_get_option('copy-text-copy'); ?>
                     </div>
                     <!-- close .site-info -->
                  </div>
               </div>
            </div>
            <!-- close .container -->
         </footer>
        <?php wp_footer(); ?>
      </body>
   </html>

