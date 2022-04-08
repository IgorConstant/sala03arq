<section id="sala03">
    <div class="uk-container-expand">
        <div class="uk-child-width-1-2@s uk-child-width-1-2@m" uk-grid>
            <div>
                <div>
                    <div class="content" data-aos="fade-right" data-aos-duration="3000">
                        <?php foreach ($app_conteudo as $text) { ?>
                            <h2><?= $text->titulo ?></h2>
                            <p><?= $text->conteudo ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="imgAbout">
                        <figure>
                            <img src="<?php echo base_url("assets/site/images/socios-sala03.png") ?>" alt="Sócios">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="sliderSala03">
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                    <li>
                        <img src="<?php echo base_url("assets/site/images/foto1.png") ?>" alt="">
                    </li>
                    <li class="gap">
                        <img src="<?php echo base_url("assets/site/images/foto2.png") ?>" alt="">
                    </li>
                    <li class="gap gap-right">
                        <img src="<?php echo base_url("assets/site/images/foto3.png") ?>" alt="">
                    </li>
                    <li>
                        <img src="<?php echo base_url("assets/site/images/foto4.png") ?>" alt="">
                    </li>
                </ul>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
            </div>
        </div>

        <div class="equipeSala03" data-aos="fade-down" data-aos-duration="3000">
            <h1 class="uk-text-center uk-margin-remove">Nossa equipe</h1>

            <div class="photoEquip">
                <div class="uk-child-width-1-2@s uk-child-width-1-4@m" uk-grid>
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