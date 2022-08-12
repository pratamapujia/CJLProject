<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataKategori extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kategori'        => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_kategori'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
            ],
        ]);
        $this->forge->addKey('id_kategori', true);
        $this->forge->createTable('kategori');
    }

    public function down()
    {
        $this->forge->dropTable('kategori');
    }
}
