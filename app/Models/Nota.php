<?php namespace App\Models;

use CodeIgniter\Model;

class Nota extends Model{
    protected $table = 'notas';
    protected $primaryKey = ['id_aluno', 'id_disciplina', 'descricao'];
    protected $returnType = 'array';
    protected $allowedFields = ['id_aluno', 'id_disciplina', 'descricao','nota'];
}