<?php

/**

 * The main template file

 * Template Name: accueil

 * @package bootstrap-basic

 */



get_header();



/**

 * determine main column size from actived sidebar

 */

$main_column_size = bootstrapBasicGetMainColumnSize();
$carte_nouvelle = new WP_Query('post_type=nouvelle&showposts=3');
?>


                <div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">

                    <main id="main" class="site-main" role="main">
<article>
                   
<div class="hero">
  <div class="swiper-container">
    
    <!-- swiper slides -->
    <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url(http://localhost:81/Cajun/wp-content/uploads/2022/12/MicrosoftTeams-image-13.jpg);">
            <h2>Saveurs uniques</h2>
        </div>
        
        <div class="swiper-slide" style="background-image: url(http://localhost:81/Cajun/wp-content/uploads/2022/11/recette_beurre_citrouille.jpg);"> 
            <h2>Recettes</h2>
        </div>
        
        <div class="swiper-slide" style="background-image: url(http://localhost:81/Cajun/wp-content/uploads/2022/11/recette_burrata_sauce.jpg);">
            <h2>Sauces et épices</h2>
        </div>
        
     
    </div>
    <!-- !swiper slides -->
    
    <!-- next / prev arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- !next / prev arrows -->
    
    <!-- pagination dots -->
    <div class="swiper-pagination"></div>
    <!-- !pagination dots -->
</div>
</div>
   <div class="entête">
    <h1 class="display-4 font-weight-bold">Services</h1>
</div>
    
  

<!-- For demo purpose -->


 <section class="Services">  
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
</section>
<div class="entête1">
    <h1 class="display-4 font-weight-bold">Recettes</h1>
</div>
  <section class="Nouvelles">
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
</section>





         <section class="bloc-temoignage">
              <div class="heroindexfirst">
                <p class=" font-weight-bold lead mb-0 color">TÉMOIGNAGES</p>
                <div class="temoignage-container">
                  <div class="hero__1">
                    <img src="https://thispersondoesnotexist.com/image" alt="" class="hero--image tem-img">
                      <div class="hero--bio">
                     <h3>Propriétaire</h3>
                      <blockquote>Dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<cite>Lorem Ipsum</cite></blockquote>
                    </div>
                  </div>
                  
                
                </div>
                  </div>
</section>


					
						
</article>
                    </main>

                </div>


<?php get_footer(); ?>

