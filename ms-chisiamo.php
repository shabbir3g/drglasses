<?php 
/*
Template Name: Chi Siamo page
*/
get_header(); ?>
	
	<?php $banner_image_siamo = get_field('banner_image_siamo'); 
	if($banner_image_siamo): ?>
	<div class="banner" style=" background: transparent url(<?php echo $banner_image_siamo['url'];  ?>) no-repeat center center;
	height:210px;"></div>
	<?php endif; ?>
	
	
         
         <div class="main-content">
            <div class="container">
               <div class="row">
                  <div id="content" class="main-content-inner col-sm-16">
                     <article id="post-44" class="post-44 page type-page status-publish hentry">
                        <header class="page-header">
                           <!--div class="breadcrumb_servizi"> I nostri servizi > Chi siamo </div-->
                           <h1 class="page-title"><?php the_title(); ?></h1>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                           <?php echo get_field('siamo_content'); ?>
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
        
<?php get_footer(); ?>