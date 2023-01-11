<section id="projetos">
    <div class="uk-container-expand">
        <div class="content">
            <h1 class="uk-margin-remove">Projetos</h1>
            <p>A arquitetura é perfeita quando ela vai além dos traços, sai do papel e transforma-se numa realidade que atende as necessidades de pessoas. Por mais conceito, técnica, conhecimento e experiência, projetamos sobretudo, casas com alma</p>
        </div>

        <div class="projects">
            <div class="uk-child-width-1-3@s uk-child-width-1-4@m  uk-grid-small" uk-grid>
                <?php foreach ($app_projetos as $projetos) { ?>
                    <div>
                        <div class="uk-inline">
                            <a href="<?php echo site_url() . 'projetos/' . $projetos->url_seo ?>"><img class="imgDestaque" src="upload/galeria/projeto-destaque/<?= $projetos->destaque ?>" alt="<?= $projetos->titulo_projeto ?>"></a>
                            <div class="uk-overlay uk-overlay-default uk-position-bottom">
                                <p class="tituloProjeto"><?= $projetos->titulo_projeto ?></p>
                                <p class="categoriaProjeto"><?= $projetos->categoria_projeto ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>