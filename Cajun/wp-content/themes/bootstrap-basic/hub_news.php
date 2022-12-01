<?php
/**
 * The main template file
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

<html>
    <head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="styles.css">
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;900&display=swap');
      </style>
    </head>
    <body>
        <p class="titre-hero">HUB DE NOUVELLES</p>
        <img src="../boite_cadeau_jaune_transparent.png" alt="" class="hero">
        <p class="texte1">On te prépare ça le jour même, et ça part le lendemain (sauf si tu commandes le vendredi à 17 h. Là, ça partira peut-être le lundi, surtout si l’envie d’un verre de vin est très pressante!) Ensuite, ça prend environ 1 à 3 jours ouvrables à nos transporteurs pour te mettre ça dans ta boite aux lettres!</p>
        <!-- BLOC SERVICES -->

        <!-- MENU DÉROULANT -->
        <select name="nouvelles" id="nouvelles">
          <option value="récentes">Récentes</option>
          <option value="anciennes">Anciennes</option>
        </select>


<div class="main-services">
  <p class="services-titre">NOUVELLES</p>
  
 <div class="services-wrapper"> 
  <div class="services-cartes services-cartes1">
    <a style="text-decoration: none" href="http://google.com">
     <p class="services-intertitre services-intertitre1">SAUCES</p>
     <img src="../image_hero.webp" alt="" class="nouvelle1">
     <p class="services-description services-description1">Ces 3 créations sont le fruit d'une belle collaboration avec le Domaine Britan Mills, un producteur québécois récipiendaire d'une médaille...</p>
    </a>
  </div>

  <div class="services-cartes">
    <a style="text-decoration: none" href="http://google.com">
     <p class="services-intertitre">ÉPICES</p>
     <img src="../pot_epices_bleu.png" alt="" class="nouvelle2">
     <p class="services-description">Une savante combinaison de notes exotiques qui s'accordent dans tous vos sautés avec poulet, crevettes, porc ou bœuf. Aussi délicieux dans une soupe...</p>
    </a>
  </div>

  <div class="services-cartes">
    <a style="text-decoration: none" href="http://google.com">
      <p class="services-intertitre">BOÎTES</p>
      <img src="../boite_cadeau_jaune_transparent.png" alt="" class="nouvelle3">
      <p class="services-description">Notre assaisonnement BBQ, le roi de nos classiques! Pourquoi essayer notre mélange d’épices? Il permet une cuisine simple et rapide...</p>
      </a>
  </div>



    <div class="services-cartes">
      <a style="text-decoration: none" href="http://google.com">
       <p class="services-intertitre">SAUCES</p>
       <img src="../image_hero.webp" alt="" class="nouvelle4">
       <p class="services-description">Ces 3 créations sont le fruit d'une belle collaboration avec le Domaine Britan Mills, un producteur québécois récipiendaire d'une médaille...</p>
      </a>
    </div>
  
    <div class="services-cartes">
      <a style="text-decoration: none" href="http://google.com">
       <p class="services-intertitre">ÉPICES</p>
       <img src="../pot_epices_bleu.png" alt="" class="nouvelle5">
       <p class="services-description">Une savante combinaison de notes exotiques qui s'accordent dans tous vos sautés avec poulet, crevettes, porc ou bœuf. Aussi délicieux dans une soupe...</p>
      </a>
    </div>
  
    <div class="services-cartes">
      <a style="text-decoration: none" href="http://google.com">
        <p class="services-intertitre">BOÎTES</p>
        <img src="../boite_cadeau_jaune_transparent.png" alt="" class="nouvelle6">
        <p class="services-description">Notre assaisonnement BBQ, le roi de nos classiques! Pourquoi essayer notre mélange d’épices? Il permet une cuisine simple et rapide...</p>
        </a>
    </div>
    </div>
     
</div>

          <button class="bouton-suite">PLUS DE NOUVELLES</button>
    </body>
</html>