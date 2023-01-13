<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="far fa-clipboard"></i> <?php echo $titulo_pagina ?></h1>
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
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="tituloPost" class="form-label">Título do Post</label>
                            <input type="text" class="form-control" id="tituloPost" name="tituloPost">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="editor1" class="form-label">Texto da Postagem</label>
                            <textarea id="editor1" class="form-control" name="textoPostagem" placeholder="Add Body"></textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-4">
                            <label for="anexoPostagem" class="form-label">Anexo</label>
                            <br>
                            <input type="file" name="anexoPostagem" class="form-control-file" id="anexoPostagem" required="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-4">
                            <label for="fotoDestaque" class="form-label">Foto Destaque - <small>600x600</small></label>
                            <br>
                            <input type="file" name="fotoDestaque" class="form-control-file" id="fotoDestaque" required="">
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-outline-success">Adicionar Postagem</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>