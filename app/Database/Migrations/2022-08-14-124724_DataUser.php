<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_admin'           => [
                'type'           => 'BIGINT',
                'constraint'     => 2,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_admin'     => [
                'type'       => 'VARCHAR',
                'constraint' => 60,
            ],
            'email'   => [
                'type'       => 'VARCHAR',
                'constraint' => 60,
            ],
            'username' => [
                'type'        => 'VARCHAR',
                'constraint' => 20,
            ],
            'password' => [
                'type'        => 'VARCHAR',
                'constraint' => 70,
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
        $this->forge->addKey('id_admin', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
