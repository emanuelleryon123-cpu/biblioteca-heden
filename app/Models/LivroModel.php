<?php

namespace App\Models;

use CodeIgniter\Model;

class LivroModel extends Model
{
    protected $table            = 'livro';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['isbn', 'paginas', 'ano', 'id_obra', 'id_editora'];

    protected bool $allowEmptyInserts = false;

    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';

    protected $validationRules      = [
        'isbn'       => 'required|alpha_numeric_space|max_length[20]',
        'paginas'    => 'required|integer',
        'ano'        => 'required|integer',
        'id_obra'    => 'required|integer',
        'id_editora' => 'required|integer'
    ];
    
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
    protected $allowCallbacks = true;
}