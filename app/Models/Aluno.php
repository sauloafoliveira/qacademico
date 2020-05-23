<?php namespace App\Models;

use CodeIgniter\Model;

class Aluno extends Model{
    protected $table = 'alunos';
    protected $primaryKey = 'id_aluno';
    protected $returnType = 'array';
    protected $allowedFields = ['id_aluno', 'nome', 'email'];
}