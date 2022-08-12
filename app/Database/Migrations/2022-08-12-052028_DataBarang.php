<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataBarang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_barang'          => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_barang'        => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'gambar_barang'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 70,
            ],
            'desk_barang'        => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'id_merk'            => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'id_kategori'        => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'created_at'         => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at'         => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'deleted_at'         => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);
        $this->forge->addKey('id_barang', true);
        $this->forge->addForeignKey('id_merk', 'merk', 'id_merk');
        $this->forge->addForeignKey('id_kategori', 'kategori', 'id_kategori');
        $this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropForeignKey('merk', 'merk_id_merk_foreign');
        $this->forge->dropForeignKey('kategori', 'kategori_id_kategori_foreign');
        $this->forge->dropTable('barang');
    }
}
