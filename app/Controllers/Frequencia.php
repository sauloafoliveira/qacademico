<?php namespace App\Controllers;

class Frequencia extends BaseController{

    public function index(){
        try {
            $db = \Config\Database::connect();
        } catch (\Throwable $th) {
            echo "Database conection Error!";
            var_dump($th);
        }

        $alunoModel = new \App\Models\Aluno();

        $alunos = $alunoModel->findAll();

        $data = ['namePage'=>'Frequência','alunos' => $alunos];
        return view('frequencia',$data);
    }

    public function lancarFrequencia(){
        $frequencias = $_POST['frequencias'];
        try {
            $db = \Config\Database::connect();
        } catch (\Throwable $th) {
            echo "Database conection Error!";
            var_dump($th);
        }

        $frequenciaModel = new \App\Models\Frequencia();
        foreach($frequencias as $frequencia){
            var_dump($frequencia);
            echo '<br>';
            try {
                if($frequencia['presente'] === "on"){
                    if($frequenciaModel->insert($frequencia)){
                        echo 'Sucesso ao cadastrar a frequencia<br>';
                    }else{
                        echo 'Erro ao cadastrar a frequencia<br>';
                    }
                }
            } catch (\Throwable $th) {
                echo 'não foi possivel salvar a frequencia <br>';
                echo $th;
                echo '<br><br>';
            }
        }
    }
}

