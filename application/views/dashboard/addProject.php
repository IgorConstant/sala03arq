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
        <div class="col-12 col-sm-12 mb-4">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="tituloProjeto" class="form-label">Título do Projeto</label>
                            <input type="text" class="form-control" id="tituloProjeto" name="tituloProjeto">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="localizacaoProjeto" class="form-label">Localização</label>
                            <input type="text" class="form-control" id="localizacaoProjeto" name="localizacaoProjeto">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="categoriaProjeto" class="form-label">Categoria do Projeto</label>
                            <input type="text" class="form-control" id="categoriaProjeto" name="categoriaProjeto">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="urlSEO" class="form-label">URL SEO</label>
                            <input type="text" class="form-control" id="urlSEO" name="urlSEO">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="fichaTecnica" class="form-label">Ficha Técnica</label>
                            <textarea class="form-control" id="fichaTecnica" name="fichaTecnica" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="equipeProjeto" class="form-label">Equipe</label>
                            <textarea class="form-control" id="equipeProjeto" name="equipeProjeto" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="fotoDestaque" class="form-label">Foto Destaque - <small>1280x1280</small></label>
                            <br>
                            <input type="file" name="fotoDestaque" class="form-control-file" id="fotoDestaque" required="">
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-outline-success">Incluir Projeto</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>