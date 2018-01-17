<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package drglasses
 */

?>
<div class="post_loop">
	<div class="photo-principal">
	   <div class="photo-principal-title">
		  <a href="<?php the_permalink(); ?>" style="color:#112153;">
		 <?php the_title(); ?></a>
	   </div>
	   <a href="<?php the_permalink(); ?>">
	   <?php the_post_thumbnail(); ?> </a>
	</div>
	<div class="title_first_news_category">
	   <div class="data_article">
		  <?php the_time('d F Y'); ?>&nbsp;-&nbsp;<?php the_category('<span>','</span>',''); ?>
	   </div>
	</div>
	<div class="content_first_news_category">
		<?php echo wp_trim_words(get_the_content(),40, '</div>
	<div class="read_more">
	   <a href="../auguri-check-up-doctor-glass-resta-vicino-agli-automobilisti/index.html">
	   > Continua a leggere l\'articolo
	   </a>
	</div>'); ?>
	         
	
 </div>
					 