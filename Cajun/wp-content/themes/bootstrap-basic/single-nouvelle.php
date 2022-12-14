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
					
      					<hero srch="<?php the_field('image'); ?>" titrec="<?php the_field('titre-viande'); ?>" titrev="<?php the_field('titre-vegan'); ?>" date="<?php the_field('date'); ?>">
      					</hero>
			
					
							<div class='main-equipe'>
								<div class='equipe-wrapper'>
			
						</div>
						</div>
						<recette txt1="<?php the_field('texte_1'); ?>" txt2="<?php the_field('texte_2'); ?>" txt3="<?php the_field('texte_3'); ?>" txt4="<?php the_field('texte_4'); ?>" txt5="<?php the_field('texte_5'); ?>" txt6="<?php the_field('texte_6'); ?>" t1="<?php the_field('titre_1'); ?>" t2="<?php the_field('titre_2'); ?>" t3="<?php the_field('titre_3'); ?>"  img="<?php the_field('image_preview'); ?>" lien="<?php the_field('lien-nouvelle'); ?>"></recette>
					</div>
						
					</article>
						
					
					</main>
				</div>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 