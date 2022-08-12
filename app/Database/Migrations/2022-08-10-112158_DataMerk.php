<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataMerk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_merk'            => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_merk'      => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
            'gambar_merk'    => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
            'created_at' => [
                'type'        => 'DATETIME',
                'null'        => true,
            ],
            'updated_at' => [
                'type'        => 'DATETIME',
                'null'        => true,
            ],
            'deleted_at' => [
                'type'        => 'DATETIME',
                'null'        => true,
            ],
        ]);
        $this->forge->addKey('id_merk', true);
        $this->forge->createTable('merk');
    }

    public function down()
    {
        $this->forge->dropTable('merk');
    }
}
