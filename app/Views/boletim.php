<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Boletim</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <style>
        #notas{
            margin-top: 40px;
        }
        #notas thead tr{
            background-color: #ccc;
            font-weight: bold;
        }
        #notas tbody tr{
            background-color: #eee;
        }
        #notas tbody tr:nth-child(2n){
            background-color: #ddd;
        }
        input{
            width:300px
        }
    </style>
</head>
<body>
    <h1>Avaliações de Diários</h1>
    <table id="notas" >
        <form id="dados">
            <label for="">Diário:</label>
            <input type="text" value="teste" readonly>
            <label for="">Período Letivo:</label>
            <input type="text" value="2020/1" readonly>
            <label for="">Turma:</label>
            <input type="text" value="20201.17101.1" readonly>
            <br>
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
            <input type="text" value="Lancar avaliações: sim" readonly> - 
            <input type="text" value="Lançar frequência e conteúdo: sim" readonly> - 
            <input type="text" value="Entregar etapa de Diário: sim" readonly> - 
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
        <tbody>
            <tr>
                <td>1</td>
                <td>2020173000180</td>
                <td>Maria Josefa de Silva</td>
                <td>Matriculado</td>
                <td>Cursando</td>
                <td> <input type="number" name="nota" id="nota"> </td>
                <td> <input type="text" name="observacao" id="observacao"> </td>
            </tr>
            <tr>
                <td>1</td>
                <td>2020173000180</td>
                <td>Maria Josefa de Silva</td>
                <td>Matriculado</td>
                <td>Cursando</td>
                <td> <input type="number" name="nota" id="nota"> </td>
                <td> <input type="text" name="observacao" id="observacao"> </td>
            </tr>
            <tr>
                <td>1</td>
                <td>2020173000180</td>
                <td>Maria Josefa de Silva</td>
                <td>Matriculado</td>
                <td>Cursando</td>
                <td> <input type="number" name="nota" id="nota"> </td>
                <td> <input type="text" name="observacao" id="observacao"> </td>
            </tr>
            <tr>
                <td>1</td>
                <td>2020173000180</td>
                <td>Maria Josefa de Silva</td>
                <td>Matriculado</td>
                <td>Cursando</td>
                <td> <input type="number" name="nota" id="nota"> </td>
                <td> <input type="text" name="observacao" id="observacao"> </td>
            </tr>
            <tr>
                <td>1</td>
                <td>2020173000180</td>
                <td>Maria Josefa de Silva</td>
                <td>Matriculado</td>
                <td>Cursando</td>
                <td> <input type="number" name="nota" id="nota"> </td>
                <td> <input type="text" name="observacao" id="observacao"> </td>
            </tr>
        </tbody>
    </table>
</body>
</html>