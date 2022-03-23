<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Arquitetura, Interiores, Design de Interiores, Itu, São Paulo, Brasil">
    <meta name="description" content="O estilo SALA 03 é contemporâneo, onde “menos é mais”, simplicidade em voga e o uso inteligente de materiais.">
    <meta name="author" content="Igor Henrique Constant">

    <title><?php echo $titulo_pagina ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/site/css/main.css') ?>">
</head>

<body>

    <header>
        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
            <nav class="uk-navbar-container" uk-navbar="dropbar: true;" style="position: relative; z-index: 980;">
                <div class="uk-navbar-left">
                    <div class="brandSala03">
                        <img src="<?php echo base_url('assets/site/images/logo-sala03.png') ?>" alt="Logo Sala 03">
                    </div>
                </div>
                <div class="uk-navbar-right">
                    <button class="uk-button uk-button-default" type="button" uk-toggle="target: #offcanvas-flip">
                        <img src="assets/site/images/icone-menu.png" alt="Ícone Menu">
                    </button>
                </div>
            </nav>
        </div>
    </header>

    <!-- OffCanvas -->

    <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar">

            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <ul class="uk-nav uk-nav-primary uk-margin-auto-vertical">
                <li><a href="#">A Sala 03</a></li>
            </ul>
        </div>
    </div>


    <!-- JS -->
    <script src="<?php echo base_url('assets/site/js/main.js') ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>