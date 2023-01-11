<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Arquitetura, Interiores, Design de Interiores, Itu, São Paulo, Brasil, Projetos">
    <meta name="description" content="<?php echo $description ?>">
    <meta name="author" content="Igor Henrique Constant">

    <!-- OGTags -->
    <meta property="og:title" content="Sala 03 - Arquitetura" />
    <meta property="og:url" content="https://sala03.arq.br/home" />
    <meta property="og:type" content="website" />
    <meta property="og:locale:alternate" content="pt_BR">
    <meta property="og:description" content="<?php echo $description ?>" />
    <meta property="og:image" content="<?php echo base_url("assets/site/images/bannerfb.jpg") ?>" />
    <meta property="og:image:type" content="image/jpeg" />

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url("assets/site/images/favicon-sala03.png") ?>" type="image/x-icon">

    <title><?php echo $titulo_pagina ?></title>

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/7bc0885a91.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/site/css/main.css') ?>">
</head>

<body>

    <header>
        <div uk-sticky="end: #transparent-sticky-navbar; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
            <nav class="uk-navbar-container" uk-navbar="dropbar: true;" style="position: relative; z-index: 980;">
                <div class="uk-navbar-left">
                    <div class="brandSala03">
                        <a href="<?php echo base_url('home') ?>"><img width="300px" src="<?php echo base_url('assets/site/images/logo-sala03.svg') ?>" alt="Logo Sala 03"></a>
                    </div>
                </div>
                <div class="uk-navbar-right">
                    <button class="uk-button uk-button-default" type="button" uk-toggle="target: #offcanvas-flip">
                        <img src="<?php echo base_url('assets/site/images/icone-menu.png') ?>" alt="Ícone Menu">
                    </button>
                </div>
            </nav>
        </div>
    </header>

    <!-- OffCanvas -->

    <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar">

            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <ul class="uk-nav uk-nav-primary">
                <li><a href="<?php echo base_url('a-sala03') ?>">Sala 03</a></li>
                <li><a href="<?php echo base_url('projetos') ?>">Projetos</a></li>
                <li><a href="<?php echo base_url('midias') ?>">Mídias</a></li>
                <li><a href="<?php echo base_url('contato') ?>">Contato</a></li>
                <div class="socialIcons">
                    <li><a href="https://www.linkedin.com/company/sala-03-arquitetura/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://www.instagram.com/sala03_arquitetura/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </div>
            </ul>
            <p><?php echo date("Y") ?> - SALA 03 ARQUITETURA© - TODOS OS DIREITOS RESERVADOS <br> AGÊNCIA DUETTO</p>
        </div>
    </div>


    <!-- JS -->
    <script src="<?php echo base_url('assets/site/js/main.js') ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>