<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<h1 class="text-center">Lista de alunos</h1>
<div class="col-md-12" >
    <table class="table table-striped table-hover">
        <thead class="thead-light">
            <tr>
                <td scope="col">Ordem</td>
                <td scope="col">Id</td>
                <td scope="col">Nome</td>
                <td scope="col">E-mail</td>
                <td scope="col">Senha</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($alunos as $key => $aluno){
            ?>
            <tr scope="row">
                <td><?= $key+1 ?></td>
                <td><?= $aluno['id_aluno'] ?></td>
                <td><?= $aluno['nome'] ?></td>
                <td><?= $aluno['email'] ?></td>
                <td><?= $aluno['senha'] ?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td scope="col">Lider</td>
                <td scope="col" colspan="4"><?= $lider['nome'] ?></td>
            </tr>
        </tfoot>
    </table>
</div>
<?= $this->endSection() ?>
