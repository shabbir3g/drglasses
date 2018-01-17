<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package drglasses
 */

get_header(); ?>

	 
         <div class="banner_promo_blog">
            <div class="title-blog">
               NEWS
            </div>
            <div class="content-title-blog">
               Gli ultimi aggiornamenti su Doctor Glass,<br>leader nel franchising della riparazione e sostituzione vetri auto.
            </div>
         </div>
         <div class="banner_contattaci">
            <div class="text-contattaci">
               <div class="title-contattaci">
                  CONTATTACI
               </div>
               <!--
                  -->
               <div class="content-title-contattaci">
                  Riparazione e sostituzione vetri per l'auto? Contatta Doctor Glass.
               </div>
            </div>
         </div>
         <div class="main-content">
            <div class="container">
               <div class="row">
                  <div id="content" class="main-content-inner col-sm-12">
                     <!--Start Page Content-->
                     <!-- the loop -->
					 
					 <?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );

							endwhile;

							the_posts_pagination(array(
								'next_text'		=> '&raquo;',
								'prev_text'		=> '«',
							));

						else : ?>

						 <nav class='custom-pagination'>
						 <span class='page-numbers page-num'>Pagina 1 di 8</span> <span class='page-numbers current'>1</span>
                        <a class='page-numbers' href='page/2/index.html'>2</a>
                        <a class='page-numbers' href='page/3/index.html'>3</a>
                        <span class="page-numbers dots">&hellip;</span>
                        <a class='page-numbers' href='page/8/index.html'>8</a>
                        <a class="next page-numbers" href="page/2/index.html">&raquo;</a>
						</nav>

				<?php 		endif; ?>
									 
					 
                     
					
					 
                     <!-- end of the loop -->
                     <!-- pagination here -->
                    
                     <!--End Page Content-->
                  </div>
                  <!-- close .main-content-inner -->
                  <div class="sidebar col-sm-12 col-md-4">
                     <?php get_sidebar(); ?>
                     <!-- close .sidebar-padder -->			
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
               <div class="news-carousel-content-1">News</div>
               <div class="news-carousel-content-2">&nbsp;</div>
               <div id="myCarousel3" class="carousel slide aligncenter" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                     <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel3" data-slide-to="1"></li>
                     <li data-target="#myCarousel3" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="item active">
                        <div class="primo_slider"><a href="../auguri-check-up-doctor-glass-resta-vicino-agli-automobilisti/index.html" style="color:#333333;">Tra auguri e check-up, Doctor Glass resta vicino agli automobilisti</a></div>
                        <div class="secondo_slider"><a href="../marco-lovisetto-interviene-convegno-rc-auto-insurance-connect/index.html" style="color:#333333;">Marco Lovisetto interviene al convegno RC Auto Insurance Connect</a></div>
                     </div>
                     <div class="item">
                        <div class="primo_slider"><a href="../doctor-glass-partner-convegno-sna-per-veneto-trentino-friuli/index.html" style="color:#333333;">Doctor Glass partner del convegno SNA per Veneto, Trentino e Friuli</a></div>
                        <div class="secondo_slider"><a href="../tecnologia-dellauto-nuove-norme-doctor-glass-insurance-connect/index.html" style="color:#333333;">Tecnologia dell’auto e nuove norme: Doctor Glass da Insurance Connect</a></div>
                     </div>
                     <div class="item">
                        <div class="primo_slider"><a href="../sesto-fiorentino-doctor-glass-partner-sna-compliance-agenzia/index.html" style="color:#333333;">Sesto Fiorentino: Doctor Glass partner SNA su La Compliance di Agenzia</a></div>
                        <div class="secondo_slider"><a href="../verso-lauto-guida-autonoma-lovisetto-parla-agli-intermediari/index.html" style="color:#333333;">“Verso l’auto a guida autonoma”: Lovisetto parla agli Intermediari</a></div>
                     </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel3" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                  <a class="right carousel-control" href="#myCarousel3" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
               </div>
               <!-- /.carousel -->
               <div class="news-carousel-content-3">&nbsp;</div>
               <div class="news-carousel-content-4"><a href="../news" style="color:#112153;">&nbsp;>&nbsp;Scopri tutte le news</a></div>
            </div>
         </div>
         <div class="layout">
            <div class="layout__item mt whydg">
               <div class="wrapper">
                  <h2>Perché <img src="<?php echo get_template_directory_uri();  ?>/images/logo.png" /></h2>
                  <div class="layout text--center mt">
                     <div id="whydg" class="owl-carousel">
                        <div class="whydg__item" id="n_1">
                           <a href="../clienti-doctor-glass-medaglia-doro/index.html"><img src="<?php echo get_template_directory_uri();  ?>/images/footer_promo/certificato.png" alt="Doctor Glass certificato servizio oro riparazione parabrezza 2016 2017"/></a><br>
                           <b>Servizio Oro</b>
                           <span>Settore Riparazioni Parabrezza.</span>
                        </div>
                        <div class="whydg__item" id="n_2">
                           <a href="../doctor-glass-asso-franchising-2017-nel-settore-automotive/index.html"><img src="<?php echo get_template_directory_uri();  ?>/images/footer_promo/AssoDelFranchising.png" alt="Doctor Glass Asso Del Franchising 2017"/></a><br>
                           <b>Certificato Oro</b>
                           <span>Asso del Franchising 2017<br>2, 3, 4 ruote</span>
                        </div>
                        <div class="whydg__item" id="n_3">
                           <img src="<?php echo get_template_directory_uri();  ?>/images/footer_promo/auto.png" alt="centro doctor glass servizio mobile"/><br>
                           <b>Servizio mobile</b>
                           <span>Puoi chiedere l’assistenza Doctor<br/> Glass anche a domicilio.</span>
                        </div>
                        <div class="whydg__item" id="n_4">
                           <img src="<?php echo get_template_directory_uri();  ?>/images/footer_promo/specialist.png" alt="centro doctor glass dottori materia"/>
                           <b>I dottori in materia</b>
                           <span>Esperti nella riparazione e <br/> sostituzione dei vetri per auto.</span>
                        </div>
                        <div class="whydg__item" id="n_5">
                           <img src="<?php echo get_template_directory_uri();  ?>/images/footer_promo/warranty.png" alt="centro doctor glass garanzia affidabilità"/>
                           <b>Garanzia di affidabilità</b>
                           <span>Partnership con le principali <br/> compagnie di assicurazioni.</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

<?php
get_footer();
