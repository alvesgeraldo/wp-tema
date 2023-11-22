<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme_first
 */

get_header();
?>

	<!-- Início Topo -->
  <section class="topo" style="background: url(<?php echo get_template_directory_uri(); ?>/img/background-home.jpg) no-repeat fixed center;">
        <div class="container d-flex flex-column inicio">
            <h1 class="h1">Bem vindos a
                <span class="d-block text-space">SPACESTYLEX</span></h1>
            <h2 class="h2">Desenvolvemos as melhores soluções para você ir cada vez mais longe!</h2>
        </div>
    </section>
    
    <section id="sobre-nos" class="container d-md-flex margin">
      <div>
        <picture>
          <source media="(max-width:900px)" srcset="<?php echo get_template_directory_uri(); ?>/img/sobre-nos-section-pq.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/img/sobre-nos-section.jpg" alt="Visão de um tripulante dentro de uma nave no espaço, vizualuzando o planeta terra">
        </picture> 
      </div>
      <div class="d-flex flex-column justify-content-center">
        <h2 class="mb-4">Sobre nós</h2>
        <p>A SpaceStylex é uma empresa aeroespacial sediada em Belo Horizonte - MG. Desde 1996 desenvolve todos os tipos de aeronaves que voam dentro ou fora da atmosfera.</p>
        <p>A experiência comprovada e o alto compromisso em usar a tecnologia mais avançada nos permitem criar soluções que contribuem para o progresso.</p>
        <p>Nossos clientes são: Defesa, Vigilância de Emergência e Estrutural (polícia), Comercial, Eventos, Recreativos.</p>
      </div>
    </section>

    <section id="nossas-aeronaves" class="container margin">
      <h2 class="mb-5">Nossas Aeronaves</h2>
      <div class="d-md-flex">
        <div class="card mr-3">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/produto-3.jpg" alt="Aeronave SpaceX-A350 durante um voo">
          <div class="card-body">
            <h5 class="card-title">SpaceX-A350</h5>
            <p class="card-text">Aeronave com capacidade para 366 passageiros e autonomia de mais de 14 mil quilômetros.</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/produto-2.jpg" alt="Visão do satélite SpaceX-S7 no espaço">
          <div class="card-body">
            <h5 class="card-title">SpaceX-S7</h5>
            <p class="card-text">Satélite de observação. Coleta imagens para monitorar o meio ambiente, criar mapas e fazer espionagem militar </p>
          </div>
        </div>
      </div>
      <div class="d-md-flex mt-5">
        <div class="card mr-3">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/produto-4.jpg" alt="Aeronave SpaceX-HX350 em voo">
          <div class="card-body">
            <h5 class="card-title">SpaceX-HX350</h5>
            <p class="card-text">Helicóptero utilitário leve monomotor, com capacidade para 5 passageiros e 1 piloto</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/produto-1.jpg" alt="Aeronave SpaceX-HX350 em voo durante um resgate">
          <div class="card-body">
            <h5 class="card-title">SpaceX-HX250</h5>
            <p class="card-text">Helicóptero utilitário leve monomotor, com capacidade para 5 passageiros e 1 piloto, adaptado para serviço de emergência</p>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center mt-5">
        <a style="width: 12rem;" class="nav-link btn btn-outline" href="http://localhost:10003/aeronaves.php">Mais Aeronaves</a>
      </div>
    </section>

    <section id="nossos-numeros" style="background: url(<?php echo get_template_directory_uri(); ?>/img/background-nossos-numeros.jpg) no-repeat fixed center;">
      <div class="container">
        <h2 class="mb-5 pt-5">Nossos números</h2>
        <div class="container d-md-flex justify-content-center flex-sm-wrap">
          <div class="d-flex flex-column mr-5">
            <span>27</span>
            <p>Países atendidos</p>
          </div>
          <div class="d-flex flex-column mr-5">
            <span>129</span>
            <p>Aeronaves entregues</p>
          </div>
          <div class="d-flex flex-column mr-5">
            <span>57</span>
            <p>Clientes atendidos</p>
          </div>
          <div class="d-flex flex-column mr-5">
            <span>22</span>
            <p>Satélites em órbita</p>
          </div>
        </div>
      </div>
    </section>

    <section id="empresas-parceiras" class="margin">
      <div class="container">
        <h2 class="mb-5">Empresas parceiras</h2>
        <div id="img" class="container d-md-flex justify-content-between">
          <img src="<?php echo get_template_directory_uri(); ?>/img/parceiros-Ryanair-Logo.jpg" alt="Logo empresa parceia Ryanair Companhia Aerea">
          <img src="<?php echo get_template_directory_uri(); ?>/img/parceiros-eurowings-logo.jpg" alt="Logo empresa parceira Eurowings Companhia Aerea">
          <img src="<?php echo get_template_directory_uri(); ?>/img/parceiros-VUELING-LOGO-1.jpg" alt="Logo empresa parceira Vueling Companhia Aerea">
        </div>
      </div>
    </section>

    <section id="viagens-espaciais" class="py-5">
      <div class="container d-md-flex">
        <div class="d-flex justify-content-center mb-3">
          <img src="<?php echo get_template_directory_uri(); ?>/img/viagem-espacial.jpg" alt="Onibus espacial decolando da base de lançamento">
        </div>
        <div class="ml-4 my-3">
          <h2>Viagens Espaciais</h2>
          <p>Em breve você poderá viajar ao espaço conosco. Não fique de fora, cadastre-se e receba novidades exclusivas!</p>
          <form>
            <div class="form-group">
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Seu melhor email">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="aceite">
              <label class="form-check-label" for="aceite">Aceito receber todas as informações sobre as viagens espaciais nesse e-mail informado</label>
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-primary">Cadastre-me</button>
            </div>
          </form>
        </div>
      </div>
    </section>

    <a href="#topo" id="backTop" class="btn"><i class="fas fa-arrow-circle-up"></i></a>
<?php
get_footer();
