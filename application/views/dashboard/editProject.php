<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-archway"></i> <?php echo $titulo_pagina ?></h1>
    </div>

    <section id="error-area">
        <div class="row">
            <div class="col-12 col-sm-12">
                <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>') ?>
                <?= $this->session->userdata('msg'); ?>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-12 col-sm-12">
            <form action="portfolio/editarprojeto/<?php echo ($query->id) ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="tituloProjeto" class="form-label">Título do Projeto</label>
                            <input type="text" class="form-control" id="tituloProjeto" name="tituloProjeto" value="<?php echo ($query->titulo_projeto) ?>">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="localizacaoProjeto" class="form-label">Localização</label>
                            <input type="text" class="form-control" id="localizacaoProjeto" name="localizacaoProjeto" value="<?php echo ($query->localizacao) ?>">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="categoriaProjeto" class="form-label">Categoria do Projeto</label>
                            <input type="text" class="form-control" id="categoriaProjeto" name="categoriaProjeto" value="<?php echo ($query->categoria_projeto) ?>">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="urlSEO" class="form-label">URL SEO</label>
                            <input type="text" class="form-control" id="urlSEO" name="urlSEO" value="<?php echo ($query->url_seo) ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="fichaTecnica" class="form-label">Ficha Técnica</label>
                            <textarea class="form-control" id="fichaTecnica" name="fichaTecnica" rows="3"><?php echo ($query->ficha_tecnica) ?></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="equipeProjeto" class="form-label">Equipe</label>
                            <textarea class="form-control" id="equipeProjeto" name="equipeProjeto" rows="3"><?php echo ($query->equipe) ?></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="" class="form-label">Destaque</label>
                            <br />
                            <img class="img-fluid foto-destaque" width="400" src="<?php echo base_url('upload/galeria/projeto-destaque/' . $query->destaque) ?>" alt="<?= $query->destaque ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <button type="button" class="btn btn-outline-warning mb-3 btn-trocar"><i class="fas fa-exchange-alt"></i> Trocar foto</button>
                            <button type="button" class="btn btn-outline-danger mb-3 btn-cancelar"><i class="fas fa-ban"></i> Cancelar</button>
                            <br>
                            <input type="file" name="fotoDestaque" class="form-control-file input-change-file hide" id="exampleFormControlFile1" required="" disabled="">
                        </div>
                    </div>
                    <div class="col-12 mt-3 mb-4">
                        <input type="hidden" id="idProjeto" name="idProjeto" value="<?= $query->id ?>">
                        <button type="submit" class="btn btn-outline-success">Atualizar Projeto</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>