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
					<?php if (have_posts()) {$carte_nouvelle = new WP_Query('post_type=nouvelle'); ?> 
						<?php 
						// start the loop
						while ($carte_nouvelle->have_posts()) {
							$carte_nouvelle->the_post();
							
							?><?php
							
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
						<button class="bouton-suite">PLUS DE NOUVELLES</button>
					
						</article>
					</main>
				</div>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 

