<?php namespace App\Controllers;

class Boletim extends BaseController{
    public function index(){
        try {
            $db = \Config\Database::connect();
        } catch (\Throwable $th) {
            echo'<h1 style="text-align:center">Erro de conexão com a base de dados!<h1>';
            var_dump($th);
        }
        $alunoModel = new \App\Models\Aluno();

        $alunos = $alunoModel->findAll();

        $data = ['namePage'=>'Boletim','alunos' => $alunos];
        return view('boletim',$data);
    }
    public function lancarNota(){
        $notas = $_POST['notas'];
        try {
            $db = \Config\Database::connect();
        } catch (\Throwable $th) {
            echo "Database conection Error!";
            var_dump($th);
        }
        $notaModel = new \App\Models\Nota();
        foreach($notas as $nota){
            var_dump($nota);
            echo '<br>';
            try {
                if($notaModel->insert($nota)){
                    echo 'Sucesso ao cadastrar a nota<br>';
                }else{
                    echo 'Erro ao cadastrar a nota<br>';
                }
            } catch (\Throwable $th) {
                echo 'não foi possivel salvar as notas <br>';
                echo $th;
                echo '<br><br>';
            }
        }
    }
}