<?php
/**
 * The main template file
 * Template Name: hub-news
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
      					<hero srch="http://localhost:81/Cajun/wp-content/uploads/2022/11/personne_martine_charbonneau_pots_epices.jpg" titre="NOUVELLES">
      					</hero>
					<description txt1="On te prépare ça le jour même, et ça part le lendemain (sauf si tu commandes le vendredi à 17 h. Là, ça partira peut-être le lundi, surtout si l’envie d’un verre de vin est très pressante!) Ensuite, ça prend environ 1 à 3 jours ouvrables à nos transporteurs pour te mettre ça dans ta boite aux lettres!">
     				</description>
					</div>
					<div class='main-equipe'>
								<div class='equipe-wrapper'>
							
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 

