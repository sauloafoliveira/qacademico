<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <h1 class="text-center">Lançar aulas e faltas</h1>
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
            <input type="text" value="Lógica de programação 80h" readonly>
            <br>
            <label for="">Componente curricular:</label>
            <input type="text" value="Lógica de programação" readonly>
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
                <td colspan="2">Mês e ano</td>
                <td> </td>
                <td>1/2020</td>
                <td colspan="3">2/2020</td>
                <td colspan="3">3/2020</td>
                <td colspan="2">4/2020</td>
            </tr>
            <tr>
                <td colspan="2">Dia</td>
                <td>Etapa Total</td>
                <td>29</td>
                <td>5</td>
                <td>12</td>
                <td>29</td>
                <td>4</td>
                <td>11</td>
                <td>18</td>
                <td>1</td>
                <td>8</td>
            </tr>
            <tr>
                <td colspan="2">Horário de início:</td>
                <td></td>
                <td>15:15</td>
                <td>15:15</td>
                <td>15:15</td>
                <td>15:15</td>
                <td>15:15</td>
                <td>15:15</td>
                <td>15:15</td>
                <td>15:15</td>
                <td>15:15</td>
            </tr>
            <tr>
                <td colspan="2">Horário de Fim:</td>
                <td></td>
                <td>17:15</td>
                <td>17:15</td>
                <td>17:15</td>
                <td>17:15</td>
                <td>17:15</td>
                <td>17:15</td>
                <td>17:15</td>
                <td>17:15</td>
                <td>17:15</td>
            </tr>
            <tr>
                <td colspan="2">Aulas dadas/previstas:</td>
                <td>14/14</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Matrícula</td>
                <td>Nome</td>
                
                <td><input type="button" value="Aprimorar"></td>
                <td>icones</td>
                <td>icones</td>
                <td>icones</td>
                <td>icones</td>
                <td>icones</td>
                <td>icones</td>
                <td>icones</td>
                <td>icones</td>
                <td>icones</td>
                
            </tr>
        </thead>
        <form action="frequencia/lancarFrequencia" method="POST">
        <tbody>
            <?php 
                foreach ($alunos as $key => $aluno):
                    ?>
                    <tr>
                        <input type="hidden" name="frequencias[<?=$key?>][id_disciplina]" value="6">
                        <input type="hidden" name="frequencias[<?=$key?>][id_aluno]" value="<?=$aluno['id_aluno']?>">
                        <input type="hidden" name="frequencias[<?=$key?>][dia]" value="2020-05-03 00:00:00">
                        <td>2020173000180</td>
                        <td><?=$aluno['nome']?></td>
                        <td></td>
                        <td class="green">
                            <input type="checkbox" name="frequencias[<?=$key?>][presente]" id="">
                        </td>
                    </tr>
                    <?php
                endforeach;
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td> <input type=submit class="btn btn-success" value="Larçar frequencias"> </td>
            </tr>
        </tfoot>
        </form>
    </table>
<?= $this->endSection() ?>