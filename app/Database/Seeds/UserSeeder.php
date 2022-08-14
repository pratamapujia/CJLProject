<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_admin'      => 'Kevin',
                'email'     => 'kevinsuryaperdana@gmail.com',
                'username'    => 'kvnsuryap',
                'password' => ('21101996'),
            ],
            [
                'nama_admin'      => 'Puji',
                'email'     => 'pratamapujia@gmail.com',
                'username'    => 'pratamapujia',
                'password' => ('adminpuji'),
            ],
            [
                'nama_admin'      => 'Fenny',
                'email'     => 'fennyresav@gmail.com',
                'username'    => 'fennyresav18',
                'password' => ('adminfenny'),
            ],
            [
                'nama_admin'      => 'Dwiono',
                'email'     => 'gdwiono@yahoo.co.id',
                'username'    => 'gdwiono',
                'password' => ('admindwi'),
            ],
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
