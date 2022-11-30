<?php 
/**
 * 	Template Name: equipe
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	$membre = new WP_Query('post_type=membre');
    while ($membre->have_posts()) : $membre->the_post();
?>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>

<?php 
Echo '<html>';
Echo
'<div class="bloc-hero">
<p class="titre-hero">ÉQUIPE</p>
<img src="http://localhost:81/Cajun/wp-content/uploads/2022/11/personne_martine_charbonneau_pots_epices.jpg" alt="" class="hero">
</div>';
Echo
'<p class="texte1">Me voilà nouvelle propriétaire de entreprise les Savoureux depuis mars 2020 aux côtés de mon conjoint Ghyslain. Notre Savoureuse Communauté le surnomme affectueusement le "Trépied" parce quil est plutôt utile pour tenir la caméra pendant que je partage des recettes sur nos réseaux! sociaux! Plus sérieusement, nous sommes complices et très complémentaires dans la vie comme en affaires! À chaque matin on se lève en ayant un seul but en tête: On veut faire danser des millions de papilles gustatives!
Notre mission est de rendre la vie plus facile en cuisine en offrant des produits qui allient Saveurs, Qualité et Santé.
Chez Les Savoureux on fait " DU GOÛT À GARROCHER PARTOUT! "
Bienvenue dans notre savoureux monde.</p>';
?>


<?php the_post_thumbnail('large', array('class' => 'image-heros')); ?>

<div class="texte"><?php the_content();?></div>


  
<?php endwhile; // Fermeture de la boucle
    wp_reset_postdata();

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php 
?>