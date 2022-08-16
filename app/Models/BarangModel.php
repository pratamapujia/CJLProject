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

    function count($count)
    {
        $this->db->from('barang');
        $this->db->where('kode_kategori', $count);
        return $this->db->count_all_results();
    }

    // Join Table
    function getAll()
    {
        $builder = $this->db->table('barang');
        $builder->join('merk', 'merk.id_merk = barang.id_merk');
        $builder->join('kategori', 'kategori.id_kategori = barang.id_kategori');
        $query = $builder->get();
        return $query->getResult();
    }

    function getProduk($kode_kategori, $per_page, $start)
    {
        $this->db->select('barang.*, kategori.*, merk.*');
        $this->db->join('kategori', 'kategori.kode_kategori = barang.kode_kategori');
        $this->db->join('merk', 'merk.kode_merk = barang.kode_merk');
        $this->db->where('barang.kode_kategori', $kode_kategori);
        $this->db->group_by('barang.id_barang');
        return $this->db->get('barang', $per_page, $start)->result_array();
    }

    function getKategori()
    {
        return $this->db->get('kategori')->result();
    }

    function getModel()
    {
        return $this->db->get('model')->result();
    }

    function getMerk()
    {
        return $this->db->get('merk')->result();
    }

    function addbarang()
    {
        $kategori = $this->input->post('kategori');

        $this->db->join('kategori', 'kategori.kode_kategori = barang.kode_kategori');
        $this->db->where('barang.kode_kategori', $kategori);
        $this->db->limit(1);
        $this->db->order_by('id_barang', 'desc');
        $query = $this->db->get('barang')->row();

        if ($query != null) {
            $id = $query->id_barang + 1;
            $group = kategori_help($query->nama_kategori);
        } else {
        if ($kategori == 1) {
            $id = 1000;
            $group = 'mesin';
        }
        if ($kategori == 2) {
            $id = 2000;
            $group = 'machinetool';
        }
        if ($kategori == 3) {
            $id = 3000;
            $group = 'cuttingtool';
        }
        if ($kategori == 4) {
            $id = 4000;
            $group = 'measuringtool';
        }
        if ($kategori == 5) {
            $id = 5000;
            $group = 'handtool';
        }
        if ($kategori == 6) {
            $id = 6000;
            $group = 'cuttingcoolant';
        }
        if ($kategori == 7) {
            $id = 7000;
            $group = 'abrasive';
        }
        }
    }

    function detailProduk($id_barang)
    {
        $this->db->join('kategori', 'kategori.kode_kategori = barang.kode_kategori');
        $this->db->where('barang.id_barang', $id_barang);
        return $this->db->get('barang')->row_array();
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
