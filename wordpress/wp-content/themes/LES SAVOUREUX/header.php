<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel='stylesheet' href='https://unpkg.co/gsap@3/dist/gsap.min.js'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="icon" type="image/png" sizes="16x16" href="LOGO LES SAVOUREUX.png">
<title>
	<?php bloginfo('name'); // Affiche le nom du blog ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?>
</title>
<?php 

	// Tous les .css et .js sont chargés dans le fichier functions.php
?>

<?php wp_head(); 

/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
	 Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
</head>

<body 
	<?php body_class(); 
	
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>
>

<header>
	<h1>
		<a href="<?php echo esc_url( home_url( '/' ) ); // Lien vers la page d'accueil ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home"><?php bloginfo( 'name' ); // Affiche le nom du site ?></a>
	</h1>

	<nav>
	<nav class="navbar navbar-expand-lg fixed-top py-3">
      
      <div class="container"><a href="index.html" class="logosavoureux">
          <img src="http://localhost:81/wordpress/wp-content/uploads/2022/10/logo_nav.png">
        </a>
        <div class="buttonlogo">
          <button  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
      </div>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active"><a href="index.html" class="nav-link text-uppercase font-weight-bold">Nouvelles</a></li>
                  <li class=" nav-item dropdown"><a class="nav-link text-uppercase font-weight-bold drpbtn">Services</a>
                      <div class="drpmenu produitmenu">
                        <a href="">xxx</a>
                        
                        </li>
                        <li class=" nav-item dropdown"><a href="Equipe.html" class="nav-link text-uppercase font-weight-bold drpbtn">Équipe</a>
                          
                  <li class="nav-item"><a href="A propos.html" class="nav-link text-uppercase font-weight-bold">A propos</a></li>
                  <li class="nav-item"><a href="Histoire.html" class="nav-link text-uppercase font-weight-bold">Histoire</a></li>
                  
              </ul>
          </div>
      </div>
  </nav>
	
		<?php 

			// Affiche un menu si dans le tableau de bord un menu a été défini dans cet emplacement
			wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
		?>
	</nav>

	<?php 
		// Affiche la description de site se trouvant dans "General Settings" dans l'admin WordPress
		bloginfo( 'description' ); 
	?>
</header>

<main><!-- Débute le contenu principal de notre site -->
