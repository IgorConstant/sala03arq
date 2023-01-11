<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-archway"></i> <?php echo $titulo_pagina ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <?php echo anchor('portfolio/adicionarprojeto', '<i class="fas fa-plus-circle"></i> <span>Criar novo projeto</span>', array('class' => 'btn btn-outline-success')) ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-12">
            <table id="mainTable" class="table table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Título do Projeto</th>
                        <th>Localização</th>
                        <th>Ações</th>
                    </tr>

                <tbody>
                    <?php foreach ($app_projetos as $projetos) { ?>
                        <tr>
                            <td><?= $projetos->id ?></td>
                            <td><?= $projetos->titulo_projeto ?></td>
                            <td><?= $projetos->localizacao ?></td>
                            <td class="text-center">
                                <?= anchor('portfolio/editarprojeto/' . $projetos->id, '<i class="fas fa-pencil"></i>', array('title' => 'Editar')) ?>
                                <?= anchor('portfolio/deletarprojeto/' . $projetos->id, '<i class="far fa-trash-alt"></i>', array('title' => 'Excluir')) ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
                </thead>
            </table>
        </div>
    </div>
</main>