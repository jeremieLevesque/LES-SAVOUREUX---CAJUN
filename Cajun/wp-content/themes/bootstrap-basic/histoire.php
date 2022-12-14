<?php
/**
 * The main template file
 * Template Name: histoire
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
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="styles.css">
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;900&display=swap');
      </style>

<div id="app">
      <hero srch="http://localhost:81/Cajun/wp-content/uploads/2022/11/personnes_oeil_du_dragon.jpg" titre="HISTOIRE">
        
      </hero>
<description txt1="C’est quoi ça, les Savoureux? L'histoire d'une cuisine simplifiée.">
     </description>
	 <div class='main-equipe'>
								<div class='equipe-wrapper'>
									<ul class="cards">
     									<li class="cards_item">
											<card srch="<?php the_field('image'); ?>" t1="<?php the_field('titre'); ?>" res="<?php the_field('resume'); ?>" lien="<?php the_field('lien-nouvelle'); ?>"></card>
										</li>
										</ul>

					</div>		
</div>
<p class="titre1">NOTRE HISTOIRE</p>
      <p class="texte2">C’est simple! C’est une startup d’assaisonnements biologiques et sans sucre.<br><br>
          C’est une famille qui veut cuisiner sans se casser la tête. C’est du monde vrai monde qui concocte des produits hyper-faciles à utiliser et qui goûtent le ciel. C’est nous ça Les Savoureux.<br><br>
          
          Notre ADN se trouve dans nos mélanges d'épices et d'herbes qui font notre renommée.<br><br>Pour ajouter au plaisir, on offre maintenant des produits alimentaires rehaussés de nos savoureuses épices. (Ex. Viandes marinées, saucisses décadentes, soupes, tofu, boulettes et d'autres beaux produits bientôt disponibles)
          Tu ne trouves pas ces beaux produits sur notre site? C'est normal, ils sont offerts lors de ventes éphémères sur notre site web +/- aux deux mois. Pour être informé de notre prochaine vente, abonne toi à notre infolettre sur notre page d'accueil.<br><br><br><br>
          
          Bon appétit!<br><br>
          
          Martine Charbonneau - Présidente</p>
          <div class="bloc-preparation">
            <p class="titre2">QUI EST MARTINE?</p>
            <p class="texte3">Diplômée du Collège des médecines douces du Québec, passionnée de cuisine depuis toujours, j’ai perfectionné mon art au fil des années me permettant de jumeler ma passion à mon travail. N’est-ce pas merveilleux?<br><br>
              En 2012, j’ai fondé un service de traiteur. Mon but premier était de préparer des mets santé et savoureux pour les familles pressées. Ce créneau fut porteur puisqu’il facilitait la vie des gens pressés en leur donnant accès à des plats réconfortants et nutritifs dans un concept clé en main.<br><br>
              Cette expérience m’a amenée à être sollicitée pour collaborer avec des magazines connus ainsi qu’avec des compagnies alimentaires de renommée internationale pour développer des recettes santé.<br><br>
              En 2016 j’ai entrepris des cours au Collège des médecines douces du Québec. Je désirais additionner mes connaissances en cuisine à des connaissances académiques. Depuis, j’ai obtenu mon diplôme avec succès en Nutrithérapie et j’ai entrepris une carrière d’accompagnatrice en régime cétogène ou faible en glucides.</p>
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

