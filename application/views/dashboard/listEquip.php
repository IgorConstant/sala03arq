<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-users"></i> <?php echo $titulo_pagina ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <?php echo anchor('equipe/adicionarequipe', '<i class="fas fa-plus-circle"></i> <span>Criar novo Funcionário</span>', array('class' => 'btn btn-outline-success')) ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-12">
            <table id="mainTable" class="table table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">Foto</th>
                        <th>Nome</th>
                        <th>Cargo</th>
                        <th class="text-center">Ativo</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($app_funcionarios as $funcionarios) { ?>
                        <tr>
                            <td style="width: 7%;"><img class="img-fluid funcionarioFoto" src="<?php echo base_url('upload/equipe/' . $funcionarios->foto_funcionario) ?>" alt="<?= $funcionarios->nome_funcionario ?>"></td>
                            <td><?= $funcionarios->nome_funcionario ?></td>
                            <td><?= $funcionarios->cargo_funcionario ?></td>
                            <td class="text-center"><?= ($funcionarios->ativo == 1 ? '<span class="badge rounded-pill bg-success"> Ativo</span>' : '<span class="badge rounded-pill bg-danger">Inativo</span>') ?></td>
                            <td class="text-center">
                                <?= anchor('equipe/editarfuncionario/' . $funcionarios->id, '<i class="fas fa-user-edit"></i>', array('title' => 'Editar')) ?>
                                <?= anchor('equipe/deletarfuncionario/' . $funcionarios->id, '<i class="fas fa-user-times"></i>', array('title' => 'Excluir')) ?>
                                <?php if ($funcionarios->ativo == 1) { ?>
                                    <?= anchor('equipe/funcionarioinativo/' . $funcionarios->id, '<i class="fas fa-toggle-on"></i>', array('title' => 'Ativar')) ?>
                                <?php } else { ?>
                                    <?= anchor('equipe/funcionarioativo/' . $funcionarios->id, '<i class="fas fa-toggle-off"></i>', array('title' => 'Desativar')) ?>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>