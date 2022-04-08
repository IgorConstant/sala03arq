<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-users"></i> <?php echo $titulo_pagina ?></h1>
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
            <?= form_open_multipart() ?>
            <div class="form-group">
                <?= form_label('Nome Funcionário') ?>
                <?= form_input([
                    'type' => 'text',
                    'class' => 'form-control',
                    'name' => 'nomeFuncionario',
                    'placeholder' => 'Nome Funcionário',
                    'value' => $query->nome_funcionario
                ]) ?>
            </div>
            <div class="form-group">
                <?= form_label('Cargo Funcionário') ?>
                <?= form_input([
                    'type' => 'text',
                    'class' => 'form-control',
                    'name' => 'cargoFuncionario',
                    'placeholder' => 'Cargo Funcionário',
                    'value' => $query->cargo_funcionario
                ]) ?>
            </div>
            <div class="form-group">
                <?= form_label('Ativo') ?>
                <?= form_dropdown('ativo', [1 => 'Sim', 0 => 'Não'], ($query->ativo == 1 ? 1 : 0), ['class' => 'form-control']) ?>
            </div>

            <div class="form-group">
                <?= form_label('Foto Funcionário') ?>
                <br />
                <img class="img-fluid foto-funcionario" src="<?php echo base_url('upload/equipe/' . $query->foto_funcionario) ?>" alt="<?= $query->nome_funcionario ?>">
            </div>

            <div class="form-group">
                <button type="button" class="btn btn-outline-warning mb-3 btn-trocar"><i class="fas fa-exchange-alt"></i> Trocar foto</button>
                <button type="button" class="btn btn-outline-danger mb-3 btn-cancelar"><i class="fas fa-ban"></i> Cancelar</button>
                <br>
                <input type="file" name="fotoFuncionario" class="form-control-file input-change-file hide" id="exampleFormControlFile1" required="" disabled="">
            </div>

            <hr />
            <?= form_hidden('idFuncionario', $query->id); ?>
            <?= form_submit('submit', 'Atualizar Funcionário', ['class' => 'btn btn-success mt-5 mb-5']) ?>

            <?= form_close() ?>
        </div>
    </div>
</main>