<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme_first
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon-space.ico" type="image/x-icon">

  

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
        <div id="topo" class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-spacestylex.jpg" alt="Logo SpacestyleX">
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                  <i class="fas fa-bars"></i>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="http://localhost:10003/">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://localhost:10003/#sobre-nos">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://localhost:10003/aeronaves.php">Aeronaves</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:10003/#empresas-parceiras">Parceiros</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://localhost:10003/contato.php">Contato</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link btn btn-outline" href="http://localhost:10003/#viagens-espaciais">Viagens Espaciais</a>
                    </li>
                  </ul>
                </div>
              </nav> 
        </div>
    </header>
