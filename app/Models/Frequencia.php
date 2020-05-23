<?php namespace App\Models;

use CodeIgniter\Model;

class Frequencia extends Model{
    protected $table = 'frequencia';
    protected $primaryKey = ['id_aluno', 'id_disciplina', 'dia'];
    protected $returnType = 'array';
    protected $allowedFields = ['id_aluno', 'id_disciplina', 'dia'];
}