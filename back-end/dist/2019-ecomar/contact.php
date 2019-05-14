<!DOCTYPE html>
<html lang="en">

<head>
    <noscript>
        <div class="alert alert-danger" role="alert">
            You need to enable JavaScript to run this app.
        </div>
    </noscript>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow">

    <!-- Viewport for responsive web design -->
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    <!-- INFO -->
    <title>EcoMar - Fundo de Desenvolvimento das Actividades Económicas do Mar e Águas Interiores</title>
    <meta name="description" content="Fundo de Desenvolvimento das Actividades Económicas do Mar e Águas Interiores" />
    <meta name="keywords" content="ecomar" />

    <!-- Recommended favicon format -->
    <link rel="icon" type="image/png" href="favicon.png">

    <!-- Apple Touch Icon (at least 200x200px) -->
    <link rel="apple-touch-icon" href="tile.png">

    <!-- To run web application in full-screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Status Bar Style (see Supported Meta Tags below for available values) -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Microsoft Tiles -->
    <meta name="msapplication-config" content="browserconfig.xml" />

    <!-- SOCIAL -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="htt://ecomar.pt">
    <meta property="og:title" content="EcoMar">
    <meta property="og:image" content="tile-wide.png">
    <meta property="og:description"
        content="Fundo de Desenvolvimento das Actividades Económicas do Mar e Águas Interiores">
    <meta property="og:site_name"
        content="EcoMar - Fundo de Desenvolvimento das Actividades Económicas do Mar e Águas Interiores">
    <meta property="og:locale" content="en_US">

    <!-- STYLES -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.min.css?version=2.2">
</head>

<body>
<header class="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="page-header-brand col-auto">
                <a class="page-header-logo" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-logo.svg" alt=""></a>
                <h1 class="page-header-title">Ecomar</h1>
            </div>
            <div class="col d-none d-md-none d-lg-block">
                <p class="page-header-description">Fundo de Desenvolvimento das Actividades Económicas do Mar e Águas
                    Interiores</p>
            </div>
            <div class="page-header-search col-2 d-none d-md-none d-lg-block">
                <div class="search-form">
                    <form class="form-inline">
                        <input class="form-control w-100" type="search" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn" type="submit">Buscar</button>
                    </form>
                </div>                        </div>
            <div class="page-header-share col-auto d-none d-md-none d-lg-block">
                <a href="#"><i class="icon icon-facebook"></i></a>
            </div>
        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav container justify-content-between">
            <li class="nav-item">
                <a class="nav-link" href="single.html">Institucional</a>
            </li>
            <span class="nav-item-divider"></span>
            <li class="nav-item">
                <a class="nav-link" href="category.html">Notícias</a>
            </li>
            <span class="nav-item-divider"></span>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="category.html" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Projetos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="category.html">Em Andamento</a>
                        <a class="dropdown-item" href="category.html">Concluídos</a>
                        <a class="dropdown-item" href="category.html">Acesso à crédito</a>
                        <a class="dropdown-item" href="category.html">Pesca Artesanal</a>
                        <a class="dropdown-item" href="category.html">Semi-industrial</a>
                    </div>
                </li>
                <span class="nav-item-divider"></span>
                <li class="nav-item">
                <a class="nav-link" href="single.html">Trabalhe conosco</a>
            </li>
            <span class="nav-item-divider"></span>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">Contato</a>
            </li>
        </ul>
    </div>
</nav>

<main class="container page page-contact">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Categoria</a></li>
            <li class="breadcrumb-item active" aria-current="page">Subcategoria</li>
        </ol>
    </nav>
    <article class="page-article">
        <header class="page-header">
            <h1 class="page-title">Fale Conosco</h1>
            <p class="page-opening">Hac aliquet urna at at egestas commodo mauris ornare a sed parturient in aliquam
                justo senectus conubia nec a a ullamcorper curabitur consectetur adipiscing praesent dui. Placerat </p>
        </header>
        <section class="page-content">
            <form>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Seu nome completo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Seu email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputTel" class="col-sm-2 col-form-label">Telefone</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="inputTel" placeholder="Seu número de telefone">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleFormControlTextarea" class="col-sm-2 col-form-label">Mensagem</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="exampleFormControlTextarea" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col text-sm-right">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </form>

        </section>
    </article>
</main>
<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg">
                <div class="page-footer-list-container">
                    <h5 class="page-footer-list-title">
                        <a href="single.html" class="page-footer-list-title-link">Institucional</a>
                    </h5>
                    <ul class="page-footer-list">
                        <li><a href="single.html" class="page-footer-list-link">Quem somos</a></li>
                        <li><a href="single.html" class="page-footer-list-link">Visão</a></li>
                        <li><a href="single.html" class="page-footer-list-link">Valores</a></li>
                        <li><a href="single.html" class="page-footer-list-link">Missão</a></li>
                        <li><a href="single.html" class="page-footer-list-link">Estrutura</a></li>
                        <li><a href="single.html" class="page-footer-list-link">Equipe e Conselho</a></li>
                    </ul>
                </div>

                <div class="page-footer-list-container">
                    <h5 class="page-footer-list-title">
                        <a href="single.html" class="page-footer-list-title-link">Contato</a>
                    </h5>
                    <ul class="page-footer-list">
                        <li><a href="contact.html" class="page-footer-list-link">Fale Conosco</a></li>
                        <li><a href="single.html" class="page-footer-list-link">Imprensa</a></li>
                    </ul>
                </div>

            </div>

            <div class="col-12 col-lg">
                <div class="page-footer-list-container">
                    <h5 class="page-footer-list-title">
                        <a href="single.html" class="page-footer-list-title-link">Notícias</a>
                    </h5>
                    <ul class="page-footer-list">
                        <li><a href="single.html" class="page-footer-list-link">Comunicados</a></li>
                        <li><a href="single.html" class="page-footer-list-link">Agenda</a></li>
                        <li><a href="single.html" class="page-footer-list-link">Galeria de Fotos</a></li>
                        <li><a href="single.html" class="page-footer-list-link">Boletim Informativo</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-lg">
                <div class="page-footer-list-container">
                    <h5 class="page-footer-list-title">
                        <a href="single.html" class="page-footer-list-title-link">Projetos</a>
                    </h5>
                    <ul class="page-footer-list">
                        <li><a href="single.html" class="page-footer-list-link">Em Andamento</a></li>
                        <li><a href="single.html" class="page-footer-list-link">Concluídos</a></li>
                        <li><a href="single.html" class="page-footer-list-link">Acesso à Crédito</a></li>
                        <li><a href="single.html" class="page-footer-list-link">Pesca Artesanal</a></li>
                        <li><a href="single.html" class="page-footer-list-link">Semi Industrial</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-lg">
                <div class="page-footer-list-container">
                    <h5 class="page-footer-list-title">
                        <a href="single.html" class="page-footer-list-title-link">Transparência</a>
                    </h5>
                    <ul class="page-footer-list">
                        <li><a href="single.html" class="page-footer-list-link">Auditoria</a></li>
                        <li><a href="single.html" class="page-footer-list-link">Relatórios Anuais</a></li>
                    </ul>
                </div>

                <div class="page-footer-list-container">
                    <h5 class="page-footer-list-title">
                        <a href="single.html" class="page-footer-list-title-link">Trabalhe Conosco</a>
                    </h5>
                    <ul class="page-footer-list">
                        <li><a href="single.html" class="page-footer-list-link">Contratações</a></li>
                        <li><a href="single.html" class="page-footer-list-link">Compras Aquisições</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-lg">
                <div class="page-footer-list-container page-footer-social d-flex">
                    <div class="page-footer-social-item page-footer-social-item-facebook"><a href="single.html">Facebook</a></div>
                    <div class="page-footer-social-item page-footer-social-item-twitter"><a href="single.html">Twitter</a></div>
                </div>

                <div class="page-footer-list-container page-footer-newsletter">
                    <h5 class="page-footer-newsletter-title">Receba nosso boletim informativo</h5>
                    <form class="form-inline">
                        <input class="form-control w-100" type="search" placeholder="Digite seu e-mail" aria-label="Digite seu e-mail">
                    </form>
                </div>
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    <section class="footer-address container-fluid text-center">
        <p>Fundo de Fomento Pesqueiro. Av Emília Daússe 591, D/C - Maputo - Moçambique - C.P. 2290 Tel. +258 21 300 571 - Cel. +258 82 302 68 20</p>
    </section>
</footer>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.min.js"></script>
</body>
</html>
