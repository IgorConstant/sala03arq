<section id="sala03">
    <div class="uk-container-expand">
        <div class="uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid>
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
        <div class="uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid>
            <div class="uk-flex uk-flex-middle">
                <div class="sociosContent" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <p>Os projetos SALA03 são realizados da forma mais personalizada possível! Para isso ser possível e tornar sonhos reais, formamos uma equipe plural com profissionais que atuam em diversas áreas como arquitetura, engenharia, design de interiores e administração. Suas personalidades e experiências profissionais anteriores são singulares e somam para um trabalho colaborativo que tem um único objetivo: a excelência em cada projeto.</p>
                    <p>Guiados por uma filosofia que coloca arquitetura e natureza em perfeita sincronia, os arquitetos João Pedro Osório e Cauê Baldi fundaram o SALA03 para levar a cada cliente um serviço completo e personalizado, centralizando a criação de projeto arquitetônico, interiores e administração da obra.</p>
                </div>
            </div>
            <div>
                <div class="sociosImg">
                    <figure>
                        <img src="<?php echo base_url("assets/site/images/foto-socios-sala03.jpg") ?>" alt="Sócios">
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
                    <img src="<?php echo base_url("assets/site/images/foto-equipe-grupo2.jpg") ?>" alt="Foto Escritório">
                </li>
                <li>
                    <img src="<?php echo base_url("assets/site/images/foto3.png") ?>" alt="Foto Escritório">
                </li>
                <li>
                    <img src="<?php echo base_url("assets/site/images/foto-equipe-grupo3.jpg") ?>" alt="Foto Escritório">
                </li>
                <li>
                    <img src="<?php echo base_url("assets/site/images/foto4.png") ?>" alt="Foto Escritório">
                </li>
                <li>
                    <img src="<?php echo base_url("assets/site/images/foto-equipe-grupo6.jpg") ?>" alt="Foto Escritório">
                </li>
                <li>
                    <img src="<?php echo base_url("assets/site/images/foto5.jpg") ?>" alt="Foto Escritório">
                </li>
                <li>
                    <img src="<?php echo base_url("assets/site/images/foto-equipe-grupo.jpg") ?>" alt="Foto Escritório">
                </li>
                <li>
                    <img src="<?php echo base_url("assets/site/images/foto-equipe-grupo4.jpg") ?>" alt="Foto Escritório">
                </li>
                <li>
                    <img src="<?php echo base_url("assets/site/images/foto7.jpg") ?>" alt="Foto Escritório">
                </li>
                <li>
                    <img src="<?php echo base_url("assets/site/images/foto-equipe-grupo5.jpg") ?>" alt="Foto Escritório">
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
                    <?php foreach ($app_funcionarios as $row) { ?>
                        <div>
                            <div>
                                <img class="image" src="upload/equipe/<?= $row->foto_funcionario ?>" alt="<?= $row->nome_funcionario ?>">
                                <p class="nomeFuncionario"><?= $row->nome_funcionario ?></p>
                                <p class="cargoFuncionario"><?= $row->cargo_funcionario ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <h3 class="uk-text-center titleOld">Antigos Colaboradores</h3>
                <p class="uk-text-center exfuncionarios">André Navarro - Arquiteto | David Natto - Arquiteto Interiores | Jaqueline Miranda - Arquiteta | Mariana Gomes - Arquiteta Interiores</p>
            </div>
        </div>
    </div>
</section>