<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id_admin';
    protected $returnType       = 'object';
    protected $allowedFields    = ['nama_admin', 'email', 'username', 'password'];
    protected $useTimestamps    = true;
    protected $useSoftDeletes   = true;

    // public function LoginAdmin($email, $password)
    // {
    //     return $this->db->table('users')
    //         ->where([
    //             'email' => $email,
    //             'password' => $password,
    //         ])->get()->getRowArray();
    // }
}
