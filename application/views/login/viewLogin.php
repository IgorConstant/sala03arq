<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Igor Henrique Constant">
    <title>Gerenciador de Conteúdo - Sala03</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7bc0885a91.js"></script>

    <!-- Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/css/login.css') ?>">

</head>


<body>
    <!-- partial:index.partial.html -->
    <div class="page">
        <div class="container">
            <div class="left">
                <div class="login">
                    <img src="<?php echo base_url('assets/dashboard/images/logo-negativo.png') ?>" alt="Logo Negativo">
                </div>
            </div>
            <div class="right">
                <svg viewBox="0 0 320 300">
                    <defs>
                        <linearGradient inkscape:collect="always" id="linearGradient" x1="13" y1="193.49992" x2="307" y2="193.49992" gradientUnits="userSpaceOnUse">
                            <stop style="stop-color:#ffffff;" offset="0" id="stop876" />
                            <stop style="stop-color:#000000;" offset="1" id="stop878" />
                        </linearGradient>
                    </defs>
                    <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
                </svg>
                <div class="form">
                    <form method="POST">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="senha">
                        <button type="submit" id="submit">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
        <?= $this->session->flashdata('erro_login'); ?>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js'></script>
    <script src="<?php echo base_url('assets/dashboard/js/main.js') ?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/bootstrap.bundle.min.js') ?>"></script>
</body>