<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Money extends Model
{
    protected $table                = 'money';
    protected $primaryKey           = 'id';
    protected $allowedFields        = ['nama','no_rekening','nominal_uang'];
    protected $returnType           = 'object';
}
