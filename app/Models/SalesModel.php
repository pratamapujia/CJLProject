<?php

namespace App\Models;

use CodeIgniter\Model;

class SalesModel extends Model
{
    protected $table            = 'sales';
    protected $primaryKey       = 'id_sales';
    protected $returnType       = 'object';
    protected $allowedFields    = ['nama_sales', 'phone_sales', 'alamat_sales', 'tgl_lahir_sales'];
    protected $useTimestamps    = true;
    protected $useSoftDeletes   = true;
}
