<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $namePage ?></title>
    <link rel="stylesheet" 
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
            crossorigin="anonymous">
    <style>
        ::-webkit-scrollbar{
            width:8px;
            background-color: rgba(0,0,0,0.1);
        }
        ::-webkit-scrollbar-thumb{
            border-radius: 6px;
            background-color: rgba(0,0,0,0.3);
        }
        .green{
            background-color: #b0ffd1;
        }
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
        input[type=text]{
            width:400px;
            margin:2px;
            border: none;
            border-bottom: 1px solid #aaa;
            outline: none;
        }
        label{
            display:inline-block;
            width:230px;
            padding-right: 5px;
            text-align: right;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Q-Acadêmico</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </nav>
    <?= $this->renderSection('content') ?>
</body>
</html>