<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Frequência</title>
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
        .green{
            background-color: #9eff9c;
        }
    </style>
</head>
<body>
    <h1>Lançar aulas e faltas</h1>
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
        <tbody>
            <tr>
                <td>2020173000180</td>
                <td>Maria Josefa de Silva</td>
                <td></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                
            </tr>
            <tr>
                <td>2020173000180</td>
                <td>Maria Josefa de Silva</td>
                <td></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>

            </tr>
            <tr>
                <td>2020173000180</td>
                <td>Maria Josefa de Silva</td>
                <td></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
            </tr>
            <tr>
                <td>2020173000180</td>
                <td>Maria Josefa de Silva</td>
                <td></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
            </tr>
            <tr>
                <td>2020173000180</td>
                <td>Maria Josefa de Silva</td>
                <td></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
                <td class="green"></td>
            </tr>
        </tbody>
    </table>
</body>
</html>