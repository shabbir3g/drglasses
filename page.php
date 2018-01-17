<?php 
/*
Template Name: Chi Siamo page
*/
get_header(); ?>
	
	
	
	
	<?php while(have_posts()): the_post();  ?>
	
	
	<?php if(get_the_post_thumbnail_url()): ?>
	<div class="banner" style=" background: transparent url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center center;
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
                           <?php the_content(); ?>
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
		 
		 <?php endwhile; ?>
        
<?php get_footer(); ?>