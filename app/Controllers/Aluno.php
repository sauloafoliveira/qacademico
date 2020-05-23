<?php namespace App\Controllers;

class Aluno extends BaseController{
    public function index(){
        $this->cachePage(30);
        try {
            $db = \Config\Database::connect();
        } catch (\Throwable $th) {
            echo "Database conection Error!";
            var_dump($th);
        }
        $alunoModel = new \App\Models\Aluno();
        $alunos = $alunoModel->findAll();
        $data = ['namePage'=>'Aluno','alunos' => $alunos,'lider'=>$alunos[1]];
        return view('aluno',$data);
    }
}