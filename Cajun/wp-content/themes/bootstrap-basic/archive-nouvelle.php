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
      					<hero srch="<?php the_field('image'); ?>" titre="<?php the_field('titre'); ?>" titre1="<?php the_field('date'); ?>">
      					</hero>
			
					
						<recette txt="<?php the_field('description'); ?>"></recette>
					</div>
						
					</article>
						
					
					</main>
				</div>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 