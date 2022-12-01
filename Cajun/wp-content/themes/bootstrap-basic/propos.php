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


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
       	 	 	 	 	 	 	 	 	 	 	 	 	<link rel="stylesheet" href="styles.css">
<style>
        @import url('https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;900&display=swap');<br />
      </style>        

<div class="bloc-hero">
<p class="titre-hero">À PROPOS</p>
<img src="http://localhost:81/Cajun/wp-content/uploads/2022/11/banniere_rouge_logo.jpg" alt="" class="hero"></div>
<p class="texte1">Nos saveurs sont à la fois uniques et accessibles, comme nous!</p>
<p class="titre1">NOUS JOINDRE</p>
<p class="texte2">Appelle-nous, écris-nous, viens souper, on a hâte de te rencontrer!<br>
Martine et l'équipe des Savoureux.<br><br><br>
info@lessavoureux.com<br>
450-304-0977</p>

<div class="bloc-preparation">
<p class="titre2">POINTS DE VENTE</p>
<p class="texte3">Tu adores nos assaisonnements, et les pots dans lesquels nous les offrons?<br>
Tu as raison, ils sont pas mal de notre goût aussi! Voici nos points de vente.</p>

<div class="map-responsive">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.615563212798!2d-74.03975319999999!3d45.778894199999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccf2c7f14d1498d%3A0x1ada6b3f749ca6d5!2s55%20Rue%20Claude-Audy%2C%20Saint-J%C3%A9r%C3%B4me%2C%20QC%20J5L%201Z6!5e0!3m2!1sfr!2sca!4v1669635239405!5m2!1sfr!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


</div>
</div>
