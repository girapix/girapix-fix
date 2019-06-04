<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Girapix | Comunicação digital">
    <meta name="author" content="Girapix | Comunicação Digital">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title><?php bloginfo('name'); ?></title>
    <!-- Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Icones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.2/iconify.min.js"></script>
    <!-- Estilos -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/<?php echo $style; ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/geral.css">
    <!-- Animações CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/owl/assets/owl.carousel.min.css" />
    <!-- Plugins -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/plugins.css">
</head>
<body <?php body_class(); ?>>
    <!-- Conteudo do topo do site -->
    <header>
        <ul class="sidenav" id="slide-out">
            <div class="sidenav-box">
                <li><a href="index.php" class="white-text">início</a></li>
                <li><a href="sobre.php" class="white-text">sobre</a></li>
                <li><a href="portfolio.php" class="white-text">portfólio</a></li>
                <li><a href="contato.php" class="white-text">contato</a></li>
            </div>
        </ul>
        <!-- Cabeçalho do site -->
        <div class="navbar-fixed">
            <nav class="navbar z-depth-0">
                <div class="nav-wrapper container" data-aos="fade-down">
                    <a href="<?php bloginfo('url'); ?>" class="brand-logo left"><img src="<?php bloginfo('template_url'); ?>/images/girapix.png" alt="Girapix | Comunicação Digital"></a>
                    <a href="#" data-target="slide-out" class="sidenav-trigger right"><span class="iconify" data-icon="feather:align-center" data-inline="false"></span></a>
                    <ul class="right hide-on-med-and-down menu-site">
                        <li><a href="index.php">início</a></li>
                        <li><a href="sobre.php">sobre</a></li>
                        <li><a href="portfolio.php">portfólio</a></li>
                        <li><a href="contato.php">contato</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- banner do site -->
        <section class="banner scrollspy" id="home">
            <div class="row container">
                <div class="col s12 l8 banner-content" data-aos="fade-right">
                    <div class="banner-textos left">
                        <h2>Girapix | Comunicação Digital</h2>
                        <h1><?php echo $bannerH1; ?></h1>
                        <p><?php echo $bannerP; ?></p>
                    </div>
                    <a href="#contato" class="waves-effect waves-light btn-large btn-principal btn-anim">Contato</a>
                </div>
            </div>
            <div class="col s12 slide-call center">
                <i class="small material-icons animated bounce infinite">keyboard_arrow_down</i>
            </div>
        </section>
    </header>