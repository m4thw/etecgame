<?php
namespace App\Models;

use CodeIgniter\Model;

class FornecedorModel extends Model 
{
    protected $table = 'fornecedor_tb';
    protected $primaryKey = 'codForn';
    protected $allowedFields = ['nomeForn', 'emailForn', 'foneForn'];
    protected $returnType = 'object';
}


    