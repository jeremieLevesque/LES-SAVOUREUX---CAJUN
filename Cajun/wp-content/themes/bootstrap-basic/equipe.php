<?php 
/**
 * Template Name: equipe
 * 
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
      					<hero srch="http://localhost:81/Cajun/wp-content/uploads/2022/11/personne_martine_charbonneau_pots_epices.jpg" titre="ÉQUIPE">
      					</hero>
					<description txt1="Me voici le nouveau propriétaire des Savoureux depuis mars 2020 aux côtés de mon conjoint Ghyslain. Notre Tasty Community l'appelle affectueusement le Trépied car c'est plutôt utile pour tenir l'appareil photo pendant que je partage des recettes sur nos réseaux ! Social! Plus sérieusement, nous sommes complices et très complémentaires dans la vie comme en entreprise ! Chaque matin nous nous réveillons avec un seul objectif en tête : Nous voulons faire danser des millions de papilles !
Notre mission est de vous faciliter la vie en cuisine en proposant des produits alliant Saveur, Qualité et Santé.
Aux Savoureux on fait GOUTER AU GARROCHER PARTOUT !">
     				</description>
					</div>
					
							<div class='main-equipe'>
								<div class='equipe-wrapper'>
						<?php if (have_posts()) {$membre = new WP_Query('post_type=membre'); ?> 
						<?php 
						
						// start the loop
						while ($membre->have_posts()) {
							$membre->the_post();
							?><pre><?php print_r(get_the_category()); ?></pre><?php
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
						</div>
						</div>
						</article>
					</main>
				</div>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 