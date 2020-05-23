<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<h1 class="text-center">Avaliações de Diários</h1>
    <table id="notas" >
        <form id="dados">
            <label for="">Diário:</label>
            <input type="text" value="teste" readonly>
            <br>
            <label for="">Período Letivo:</label>
            <input type="text" value="2020/1" readonly>
            <br>
            <label for="">Turma:</label>
            <input type="text" value="20201.17101.1" readonly>
            <br>
            <label for=""></label>
            <input type="text" value="Empreendedorismo 80h" readonly>
            <br>
            <label for="">Componente curricular:</label>
            <input type="text" value="Empreendedorismo" readonly>
            <br>
            <label for="">Professor Formador - principal:</label>
            <input type="text" value="Saulo Anderson Freitas de Oliveira" readonly>
            <br>
            <label for="">Etapa:</label>
            <input type="text" value="N1" readonly>
            <br>
            <label for=""> Meu Acesso:</label>
            <input type="text" value="de 27/01/2020 a 27/12/2020" readonly>
            <br>
            <label for=""> Permissões:</label>
            <input type="text" value="Lancar avaliações: sim" readonly>
            <br>
            <label for=""></label>
            <input type="text" value="Lançar frequência e conteúdo: sim" readonly>
            <br>
            <label for=""></label>
            <input type="text" value="Entregar etapa de Diário: sim" readonly>
            <br>
            <label for=""></label>
            <input type="text" value="Alterações sem explicativa a partir de 20/04/2020" readonly>
        </form>
        <thead>
            <tr>
                <td>Ordem</td>
                <td>Matrícula</td>
                <td>Nome</td>
                <td>Situação no período</td>
                <td>Situação no diário</td>
                <td>Nota</td>
                <td>Observação</td>
            </tr>
        </thead>
        <form action="boletim/lancarNota" method="POST">
        <tbody>
            <?php 
                foreach ($alunos as $key => $aluno):
                    ?>
                        <input type="hidden" name="notas[<?=$key?>][id_disciplina]" value="6">
                        <input type="hidden" name="notas[<?=$key?>][descricao]" value="N1">
                        <input type="hidden" name="notas[<?=$key?>][id_aluno]" value="<?=$aluno['id_aluno']?>">
                        <tr>
                            <td><?=$key?></td>
                            <td>2020173000180</td>
                            <td><?=$aluno['nome']?></td>
                            <td>Matriculado</td>
                            <td>Cursando</td>
                            <td> <input type="number" name="notas[<?=$key?>][nota]" min="0" max="10" id="nota"> </td>
                            <td> <input type="text" disabled name="observacao" id="observacao"> </td>
                        </tr>
                        <?php
                endforeach;
                ?>
        </tbody>
        <tfoot>
            <tr>
                <td> <input type=submit class="btn btn-success" value="Larçar notas"> </td>
            </tr>
        </tfoot>
    </form>
    </table>
<?= $this->endSection() ?>