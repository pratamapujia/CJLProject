<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id_admin';
    protected $returnType       = 'object';
    protected $allowedFields    = ['nama_admin', 'email', 'username', 'password'];
    protected $useTimestamps    = true;
    protected $useSoftDeletes   = true;
}
