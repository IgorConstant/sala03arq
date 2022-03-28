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
        <?= form_open_multipart() ?>
        <div class="form-group mb-3">
            <?= form_label('Nome Funcionário') ?>
            <?= form_input([
                'type' => 'text',
                'class' => 'form-control',
                'name' => 'nomeFuncionario',
                'required' => ''
            ]) ?>
        </div>
        <div class="form-group mb-3">
            <?= form_label('Cargo') ?>
            <?= form_input([
                'type' => 'text',
                'class' => 'form-control',
                'name' => 'cargoFuncionario',
                'required' => ''
            ]) ?>
        </div>
        <div class="form-group mb-3">
            <?= form_label('Foto Funcionário - Tamanho Foto 480x480') ?>
            <br>
            <input type="file" name="fotoFuncionario" class="form-control-file" id="exampleFormControlFile1" required="">
        </div>
        <div class="form-group mb-3">
            <?= form_label('Ativo') ?>
            <?= form_dropdown('ativo', [1 => 'Sim', 0 => 'Não'], 1, ['class' => 'form-control']) ?>
        </div>

        <hr />
        <?= form_submit('submit', 'Adicionar Funcionário', ['class' => 'btn btn-success mt-3 mb-3']) ?>

        <?= form_close() ?>
    </div>
</main>