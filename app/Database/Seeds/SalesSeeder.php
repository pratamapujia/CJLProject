<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SalesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_sales'      => 'Edi',
                'phone_sales'     => '08123170863',
                'alamat_sales'    => 'Surabaya',
                'tgl_lahir_sales' => '1980-12-22',
            ],
            [
                'nama_sales'      => 'Ilyas',
                'phone_sales'     => '081254693810',
                'alamat_sales'    => 'Surabaya',
                'tgl_lahir_sales' => '1976-01-30',
            ],
            [
                'nama_sales'      => 'Rochman',
                'phone_sales'     => '081331637497',
                'alamat_sales'    => 'Surabaya',
                'tgl_lahir_sales' => '1977-01-01',
            ],
            [
                'nama_sales'      => 'Dwiono',
                'phone_sales'     => '085232777499',
                'alamat_sales'    => 'Surabaya',
                'tgl_lahir_sales' => '1970-04-29',
            ],
        ];
        $this->db->table('sales')->insertBatch($data);
    }
}
