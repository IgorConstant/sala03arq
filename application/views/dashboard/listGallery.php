<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-photo-video"></i> <?php echo $titulo_pagina ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <?php echo anchor('galeria/adicionargaleria', '<i class="fas fa-plus-circle"></i> <span>Criar Galeria</span>', array('class' => 'btn btn-outline-success')) ?>
            </div>
        </div>
    </div>

    <div class="row">
        <table id="mainTable" class="table table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Imagens</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($app_gallery as $img) { ?>
                    <tr>
                        <td><img width="50" class="img-fluid galeriaMin" src="<?php echo base_url('upload/galeria/projetos/' . $img->fotos) ?>" alt="<?= $img->id_app_projects ?>"></td>
                        <td class="text-center"><?= anchor('galeria/deletargaleria/' . $img->id, '<i class="fas fa-trash-alt"></i>', array('title' => 'Excluir')) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>