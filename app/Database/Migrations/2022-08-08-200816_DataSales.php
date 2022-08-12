<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataSales extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_sales'           => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_sales'     => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
            'phone_sales'    => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
            'alamat_sales'   => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
            'tgl_lahir_sales' => [
                'type'        => 'DATE',
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
        $this->forge->addKey('id_sales', true);
        $this->forge->createTable('sales');
    }

    public function down()
    {
        $this->forge->dropTable('sales');
    }
}
