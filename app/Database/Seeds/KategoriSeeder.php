<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nama_kategori' => 'Machinery'],
            ['nama_kategori' => 'Machine Tools'],
            ['nama_kategori' => 'Cutting Tools'],
            ['nama_kategori' => 'Measuring Tools'],
            ['nama_kategori' => 'Hand Tools'],
            ['nama_kategori' => 'Cutting Coolant'],
            ['nama_kategori' => 'Abrasive'],
        ];
        $this->db->table('kategori')->insertBatch($data);
    }
}
