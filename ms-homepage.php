<?php 
/*
Template Name: Home Page
*/
get_header(); ?>
      <!-- .site-navigation -->
      <div class="carousel-content">
         
           <!-- test some slider  -->
	  
	  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
     <?php
			$home_slider = get_field('home_slider');
			
			
			if($home_slider):


			foreach($home_slider as $slides){
				
			?>
			
			<div class="item">
			
			  <img src="<?php echo $slides['slides']['url']; ?>" alt="<?php echo $slides['slides']['title']; ?>">
			
			</div>
			
			
			
				
				
				
				
			
			
			<?php

			}

		endif; ?>
	
   

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
  
  
   <div id="callcenter">
			<?php $call_center_title = get_field('call_center_title'); 
				if($call_center_title): ?>
            <span class="header"><?php echo $call_center_title; ?></span>
			<?php endif; ?>
            <div class="icon">
               <img src="<?php echo get_template_directory_uri();  ?>/images/callcenter.png" />
            </div>
            <?php $call_center_details = get_field('call_center_details'); 
				if($call_center_details): ?>
            <?php echo $call_center_details; ?>
			<?php endif; ?>
			
			
			
			
			
         </div>
		 
</div>
	  <!-- test some slider  -->
         
         <div id="contact-us">
            <!--h2><span>Come contattarci</span></h2-->
            <div class="link-blocks clearfix">
			
				<?php $block_01 = get_field('block_01'); 
				if($block_01): ?>
               <a href="centri-specializzati/index.html" class="link-block" onclick="javascript:ga('send', 'event', 'doctorglass', 'cerca_centro', 'home_page');">
                  <div class="contact-box contact-box-1 pull-left contact-box--pin">
                     <div class="line1"><?php echo $block_01['line_01'] ?></div>
                     <div class="line2"><?php echo $block_01['line_02'] ?> <span class="icon-right"></span></div>
                  </div>
               </a>
			    <?php endif; ?>
				
				
				<?php $block_02 = get_field('block_02'); 
				if($block_02): ?>
               <a class="link-block" href="prenota-appuntamento/index.html" onclick="javascript:ga('send', 'event', 'doctorglass', 'prenotazione', 'home_page');">
                  <div class="contact-box contact-box-2 pull-left contact-box--calc">
                     <div class="line1"><?php echo $block_02['line_01'] ?></div>
                     <div class="line2"><?php echo $block_02['line_02'] ?> <span class="icon-right"></span></div>
                  </div>
               </a>
			   <?php endif; ?>
			   
			   
			   <?php $block_03 = get_field('block_03'); 
				if($block_03): ?>
               <a class="link-block" href="contattaci/index.html">
                  <div class="contact-box contact-box-3 pull-left contact-box--mail">
                     <div class="line1"><?php echo $block_03['line_01'] ?></div>
                     <div class="line2"><?php echo $block_03['line_02'] ?> <span class="icon-right"></span></div>
                  </div>
               </a>
			  <?php endif; ?>
			  
			  
			  
			  
            </div>
         </div>
         <!--?php endif; ?-->
      </div>
	  
	  
      <div class="banner"></div>
      
      <div class="main-content">
         <div class="container">
            <div class="row">
               <div id="content" class="main-content-inner col-sm-16">
					
                  <div id="why-us" class="clearfix">
					<?php $section_title = get_field('section_title'); 
					if($section_title): ?>
                     <h2><span><?php echo $section_title; ?></span></h2>
					  
					 <?php endif; ?>
					 
					<?php $doctor_glass_link = get_field('doctor_glass_link'); 
					if($doctor_glass_link): ?>
                    <a class="link-block" href="<?php echo $doctor_glass_link['url']; ?>">
					<?php endif; ?>
					 
					 
					<?php $box_01 = get_field('box_01'); 
					if($box_01): ?>
					<div class="why-box why-box-1 pull-left" style="background-image: url(<?php echo $box_01['image']['url']; ?>)">
					   <div class="why-text">
						  <div class="why-header"><span class="title title-small"><?php echo $box_01['title_1']; ?></span> <span class="title"><?php echo $box_01['title_2']; ?></span></div>
						  <div class="why-body"><?php echo $box_01['content']; ?></div>
					   </div>
					</div>
					<?php endif; ?>
					
					
					<?php $box_02 = get_field('box_02'); 
					if($box_02): ?>
					<div class="why-box why-box-2 pull-left" style="background-image: url(<?php echo $box_02['image']['url']; ?>)">
					   <div class="why-text">
						  <div class="why-header"><span class="title title-small"><?php echo $box_02['title_1']; ?></span> <span class="title"><?php echo $box_02['title_2']; ?></span></div>
						  <div class="why-body"><?php echo $box_02['content']; ?></div>
					   </div>
					</div>
					<?php endif; ?>
					
					<?php $box_03 = get_field('box_03'); 
					if($box_03): ?>
					<div class="why-box why-box-3 pull-left" style="background-image: url(<?php echo $box_03['image']['url']; ?>)">
					   <div class="why-text">
						  <div class="why-header"><span class="title title-small"><?php echo $box_03['title_1']; ?></span> <span class="title"><?php echo $box_03['title_2']; ?></span></div>
						  <div class="why-body"><?php echo $box_03['content']; ?></div>
					   </div>
					</div>
					<?php endif; ?>
						
                     </a>
                  </div>
                  
                  <!-- #post-## -->
               </div>
               <!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
            </div>
            <!-- close .row -->
         </div>
         <!-- close .container -->
      </div>
      <!-- close .main-content -->
      <div class="news-carousel">
         <div class="news-carousel-content">
			<?php $news_title = get_field('news_title'); 
			if($news_title): ?>
            <div class="news-carousel-content-1"><?php echo $news_title; ?></div>
			
            <div class="news-carousel-content-2">&nbsp;</div>
			<?php endif; ?>
            <div id="myCarousel3" class="carousel slide aligncenter" data-ride="carousel">
               <!-- Indicators -->
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel3" data-slide-to="1"></li>
                  <li data-target="#myCarousel3" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
			   
			   
				<?php 
				
				$news_post = new WP_Query(array(
					'post_type'				=> 'post',
				));
				
				
				
				if ( $news_post->have_posts() ) : while ( $news_post->have_posts() ) : $news_post->the_post();  ?>

                  <div class="item">
                     <div class="primo_slider"><a href="<?php the_permalink(); ?>" style="color:#333333;"><?php the_title(); ?></a></div>
                     <div class="secondo_slider"><a href="<?php the_permalink(); ?>" style="color:#333333;"><?php echo wp_trim_words(get_the_content(),10,false); ?></a></div>
					 
                  </div>
				  <?php endwhile; endif; wp_reset_query(); ?>
				
				  
				  
				  
               </div>
               <a class="left carousel-control" href="#myCarousel3" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
               <a class="right carousel-control" href="#myCarousel3" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
            <!-- /.carousel -->
			<?php $news_bottom_link = get_field('news_bottom_link'); 
			if($news_bottom_link): ?>
            <div class="news-carousel-content-3">&nbsp;</div>
            <div class="news-carousel-content-4"><a href="<?php echo $news_bottom_link['url']; ?>" style="color:#112153;"><?php echo $news_bottom_link['title']; ?></a></div>
			<?php endif; ?>
			
         </div>
      </div>
     
	  
<?php get_footer(); ?>