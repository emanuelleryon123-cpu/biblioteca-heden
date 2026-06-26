<?php

namespace App\Models;

use CodeIgniter\Model;

class EmprestimoModel extends Model
{
    protected $table            = 'emprestimo';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['data_inicio', 'data_fim', 'id_livro', 'id_usuario', 'id_bibliotecario'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = false; 

    protected $validationRules      = [
        'data_inicio'      => 'required',
        'data_fim'         => 'permit_empty',
        'id_livro'         => 'required',
        'id_usuario'       => 'required',
        'id_bibliotecario' => 'required'
    ];
    
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
    protected $allowCallbacks = true;
}