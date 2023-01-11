<section id="template">
    <div class="uk-container-expand">
        <div class="uk-child-width-1-1@s uk-child-width-1-2@m uk-grid-small" uk-grid>
            <div>
                <div>
                    <div class="content" data-aos="fade-right" data-aos-duration="3000">
                        <?php foreach ($query as $q) { ?>
                            <h1 class="tituloProjeto"><?php echo $q->titulo_projeto; ?></h1>
                            <hr />
                            <span>Ficha Técnica</span>
                            <p class="fichaTecnica uk-margin-remove"><?php echo $q->ficha_tecnica; ?></p>
                            <hr />
                            <span>Localização</span>
                            <p class="localizacao uk-margin-remove"><?php echo $q->localizacao; ?></p>
                            <hr />
                            <span>Equipe</span>
                            <p class="equipe uk-margin-remove"><?php echo $q->equipe; ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div>
                <div class="imgDestaque">
                    <?php foreach ($query as $q) { ?>
                        <figure>
                            <img class="uk-width-1-1" src="<?php echo base_url("upload/galeria/projeto-destaque/") ?><?= $q->destaque ?>" alt="<?= $q->titulo_projeto ?>">
                        </figure>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="uk-grid-small" uk-grid>
            <?php foreach ($projectGallery as $g) { ?>
                <div class="uk-width-1-3@m" uk-lightbox="animation: slide">
                    <div>
                        <div class="galeria">
                            <a class="uk-inline" href="<?php echo base_url("upload/galeria/projetos/") ?><?php echo $g->fotos; ?>">
                                <img class="uk-width-1-1" src="<?php echo base_url("upload/galeria/projetos/") ?><?php echo $g->fotos; ?>" alt="<?php echo $g->fotos; ?>">
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>