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
      					<hero srch="<?php the_field('image'); ?>;" titre="<?php the_field('titre'); ?>;" date="<?php the_field('date'); ?>;">
      					</hero>
					<description txt1="Me voici le nouveau propriétaire des Savoureux depuis mars 2020 aux côtés de mon conjoint Ghyslain. Notre Tasty Community l'appelle affectueusement le Trépied car c'est plutôt utile pour tenir l'appareil photo pendant que je partage des recettes sur nos réseaux ! Social! Plus sérieusement, nous sommes complices et très complémentaires dans la vie comme en entreprise ! Chaque matin nous nous réveillons avec un seul objectif en tête : Nous voulons faire danser des millions de papilles !
Notre mission est de vous faciliter la vie en cuisine en proposant des produits alliant Saveur, Qualité et Santé.
Aux Savoureux on fait GOUTER AU GARROCHER PARTOUT !">
     				</description>
					</div>
					
							<div class='main-equipe'>
								<div class='equipe-wrapper'>
			
						</div>
						</div>
						</article>
					</main>
				</div>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 