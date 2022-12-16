<?php

/**

 * The main template file

 * Template Name: hub-news2

 * @package bootstrap-basic

 */



get_header();



/**

 * determine main column size from actived sidebar

 */

$main_column_size = bootstrapBasicGetMainColumnSize();
$carte_nouvelle = new WP_Query('post_type=nouvelle&showposts=6&category_name=viande');
?>


                <div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">

                    <main id="main" class="site-main" role="main">
<article>
                   
                    <div id="app">

                        <hero srch="http://localhost:81/Cajun/wp-content/uploads/2022/11/personne_martine_charbonneau_pots_epices.jpg" titre="RECETTES">

                        </hero>

                    <description txt1="On te prépare ça le jour même, et ça part le lendemain (sauf si tu commandes le vendredi à 17 h. Là, ça partira peut-être le lundi, surtout si l’envie d’un verre de vin est très pressante!) Ensuite, ça prend environ 1 à 3 jours ouvrables à nos transporteurs pour te mettre ça dans ta boite aux lettres!">

                    </description>
					</div>


					<div class="main-services">
					<div class="services-wrapper"> 
                    <?php if ($carte_nouvelle->have_posts()) : while ($carte_nouvelle->have_posts()) : $carte_nouvelle->the_post();  ?>

                       
						

                        
					
						<div class="services-cartes">
							<a  href="<?php the_field('lien_recette'); ?>" style="text-decoration: none">
							<p class="services-intertitre"><?php the_field('titre-viande'); ?><?php the_field('titre-vegan'); ?></p>
							<img src="<?php the_field('image'); ?>" class="service1">
							<p class="services-description"><?php the_field('resume'); ?></p>
							</a>
						</div>

						


<?php
	endwhile;
endif;
wp_reset_query();
?>
			</div>
						</div>		
					


		
</article>
                    </main>

                </div>


<?php get_footer(); ?>

