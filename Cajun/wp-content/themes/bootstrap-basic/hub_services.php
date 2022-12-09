<?php
/**
 * The main template file
 * Template Name: hub-services
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
<?php get_sidebar('left'); ?> 
				<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
					<main id="main" class="site-main" role="main">
					<article>
						<div id="app">
							<hero srch="http://localhost:81/Cajun/wp-content/uploads/2022/11/MicrosoftTeams-image.jpg" titre="HUB DE SERVICES"> </hero>
							<description txt1="On te prépare ça le jour même, et ça part le lendemain (sauf si tu commandes le vendredi à 17 h. Là, ça partira peut-être le lundi, surtout si l’envie d’un verre de vin est très pressante!) Ensuite, ça prend environ 1 à 3 jours ouvrables à nos transporteurs pour te mettre ça dans ta boite aux lettres!">
							</description>  
							</div>
							
								<!-- BLOC SERVICES -->
						<div class="main-services">
						<p class="services-titre">NOS SERVICES</p>
						
						<div class="services-wrapper"> 
						<div class="services-cartes">
							<a style="text-decoration: none" href="http://localhost:81/Cajun/2022/12/01/service-1">
							<p class="services-intertitre">SAUCES</p>
							<img src="http://localhost:81/Cajun/wp-content/uploads/2022/11/bouteilles_sauce_trio_face-1.png" alt="" class="service1">
							<p class="services-description">Ces 3 créations sont le fruit d'une belle collaboration avec le Domaine Britan Mills, un producteur québécois récipiendaire d'une médaille...</p>
							</a>
						</div>

						<div class="services-cartes">
							<a style="text-decoration: none" href="http://localhost:81/Cajun/2022/12/01/service-2">
							<p class="services-intertitre">ÉPICES</p>
							<img src="http://localhost:81/Cajun/wp-content/uploads/2022/11/pot_epices_bleu.png" alt="" class="service2">
							<p class="services-description">Une savante combinaison de notes exotiques qui s'accordent dans tous vos sautés avec poulet, crevettes, porc ou bœuf. Aussi délicieux dans une soupe...</p>
							</a>
						</div>

						<div class="services-cartes">
							<a style="text-decoration: none" href="http://localhost:81/Cajun/2022/12/01/service-3">
							<p class="services-intertitre">BOÎTES</p>
							<img src="http://localhost:81/Cajun/wp-content/uploads/2022/11/boite_cadeau_jaune_transparent.png" alt="" class="service3">
							<p class="services-description">Notre assaisonnement BBQ, le roi de nos classiques! Pourquoi essayer notre mélange d’épices? Il permet une cuisine simple et rapide...</p>
							</a>
						</div>
						</div>
						
						</div>
					</article>
						<?php if (have_posts()) { ?> 
						<?php 
						// start the loop
						while (have_posts()) {
							the_post();
							
							/* 
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part('content', get_post_format());
						}// end while
						
						bootstrapBasicPagination();
						?> 
						<?php } else { ?> 
						<?php get_template_part('no-results', 'index'); ?>
						<?php } // endif; ?> 
					</main>
				</div>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 