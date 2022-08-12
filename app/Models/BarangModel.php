<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table            = 'barang';
    protected $primaryKey       = 'id_barang';
    protected $returnType       = 'object';
    protected $allowedFields    = ['nama_barang', 'gambar_barang', 'desk_barang', 'id_merk', 'id_kategori'];
    protected $useTimestamps    = true;
    // protected $useSoftDeletes   = true;

    // Join Table
    function getAll()
    {
        $builder = $this->db->table('barang');
        $builder->join('merk', 'merk.id_merk = barang.id_merk');
        $builder->join('kategori', 'kategori.id_kategori = barang.id_kategori');
        $query = $builder->get();
        return $query->getResult();
    }
    // function getDelete()
    // {
    //     $builder = $this->db->table('barang');
    //     $builder->join('merk', 'merk.id_merk = barang.id_merk');
    //     $builder->join('kategori', 'kategori.id_kategori = barang.id_kategori');
    //     $query = $builder->get();
    //     return $query->getResult();
    // }
}
