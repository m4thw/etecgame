<?php
namespace App\Models;

use CodeIgniter\Model;

class usuariomodel extends Model{

    protected $table = 'usuario_tb';
    protected $primaryKey = 'codusu';
    protected $allowedFields = ['emailusu', 'senhausu'];
    protected $returnType ='object';

}



    