<section id="sala03">
    <div class="uk-container-expand">
        <div class="uk-child-width-1-2@s uk-child-width-1-2@m" uk-grid>
            <div>
                <div>
                    <div class="content" data-aos="fade-right" data-aos-duration="3000">
                        <?php foreach ($app_conteudo as $text) { ?>
                            <h1><?= $text->titulo ?></h1>
                            <p><?= $text->citacao ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="uk-flex uk-flex-middle uk-margin-remove">
                <div>
                    <div class="textContent" data-aos="fade-right" data-aos-duration="3000">
                        <?php foreach ($app_conteudo as $text) { ?>
                            <p><?= $text->conteudo ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="socios">
    <div class="uk-container-expand">
        <div class="uk-child-width-1-2@s uk-child-width-1-2@m" uk-grid>
            <div class="uk-flex uk-flex-middle">
                <div class="sociosContent" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <h3>Caue baldi</h3>
                    <p class="cargo">Arquiteto Urbanista e Sócio</p>
                    <p class="descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <br>
                    <h3>João Osório</h3>
                    <p class="cargo">Arquiteto Urbanista e Sócio</p>
                    <p class="descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
            <div>
                <div class="sociosImg">
                    <figure>
                        <img src="<?php echo base_url("assets/site/images/socios-sala03.png") ?>" alt="Sócios">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="sliderFotos">
    <div class="sliderSala03">
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay: true; autoplay-interval: 2000; pause-on-hover: true">
            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m gap">
                <li>
                    <img src="<?php echo base_url("assets/site/images/foto1.png") ?>" alt="Foto Escritório">
                </li>
                <li>
                    <img src="<?php echo base_url("assets/site/images/foto2.png") ?>" alt="Foto Escritório">
                </li>
                <li>
                    <img src="<?php echo base_url("assets/site/images/foto3.png") ?>" alt="Foto Escritório">
                </li>
                <li>
                    <img src="<?php echo base_url("assets/site/images/foto4.png") ?>" alt="Foto Escritório">
                </li>
                <li>
                    <img src="<?php echo base_url("assets/site/images/foto5.jpg") ?>" alt="Foto Escritório">
                </li>
                <li>
                    <img src="<?php echo base_url("assets/site/images/foto6.jpg") ?>" alt="Foto Escritório">
                </li>
                <li>
                    <img src="<?php echo base_url("assets/site/images/foto7.jpg") ?>" alt="Foto Escritório">
                </li>
            </ul>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>
    </div>
</section>

<section id="equipe">
    <div class="uk-container-expand">
        <div class="equipeSala03" data-aos="fade-down" data-aos-duration="3000">
            <h1 class="uk-text-center uk-margin-remove">Nossa equipe</h1>

            <div class="photoEquip">
                <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-small" uk-grid>
                    <?php foreach ($app_funcionarios as $equipe) { ?>
                        <div>
                            <div>
                                <img class="image" src="upload/equipe/<?= $equipe->foto_funcionario ?>" alt="<?= $equipe->nome_funcionario ?>">
                                <p class="nomeFuncionario"><?= $equipe->nome_funcionario ?></p>
                                <p class="cargoFuncionario"><?= $equipe->cargo_funcionario ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>