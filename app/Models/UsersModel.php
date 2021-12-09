<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['fullname', 'email', 'password'];

    // public function get_data_login($email, $password)
    // {
    //     return $this->db->table('users')->where(array('email'=>$email,'password'=>$password))->get()->getRowArray();
    // }
    function get_data_login($email, $tbl)
    {
        $builder = $this->db->table($tbl);
        $builder->where('email', $email);
        $log = $builder->get()->getRow();
        return $log;
    }


}
