<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="far fa-clipboard"></i> <?php echo $titulo_pagina ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <?php echo anchor('postagens/adicionarpost', '<i class="fas fa-plus-circle"></i> <span>Adicionar Postagem</span>', array('class' => 'btn btn-outline-success')) ?>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12 col-sm-12">
            <table id="mainTable" class="table table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <td>ID</td>
                        <td>Título da Postagem</td>
                        <td>Descrição</td>
                        <td>Ações</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</main>