<?php

namespace App\Models;

use CodeIgniter\Model;

class MerkModel extends Model
{
    protected $table            = 'merk';
    protected $primaryKey       = 'id_merk';
    protected $returnType       = 'object';
    protected $allowedFields    = ['nama_merk', 'gambar_merk'];
    protected $useTimestamps    = true;
    protected $useSoftDeletes   = true;

    // public function getMerk($id = false)
    // {
    //     if ($id == false) {
    //         return $this->findAll();
    //     }

    //     return $this->where(['id_merk' => $id])->first();
    // }
}
