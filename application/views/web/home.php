<main>
    <div class="slideHome">
        <div class="uk-container-expand">
            <div uk-slideshow="animation: push">

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                    <ul class="uk-slideshow-items">
                        <?php foreach ($app_home as $banner) { ?>
                            <li>
                                <img class="uk-width-1-1" src="upload/banners/<?= $banner->banner_imagem ?>" alt="<?= $banner->nome_banner ?>">
                            </li>
                        <?php } ?>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                </div>
                <ul class="uk-slideshow-nav uk-dotnav uk-flex-center"></ul>
            </div>
        </div>
    </div>
</main>