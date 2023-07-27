<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dosen extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_dosen' => [
                'type' => 'int',
                'constraint' => '11',
                'auto_increment' => true,
            ],
            'nip' => [
                'type' => 'int',
                'constraint' => '11',
            ],
            'nama' => [
                'type' => 'varchar',
                'constraint' => '50'
            ],
        ]);
        $this->forge->addKey('nip');
        $this->forge->createTable('tabel_dosen');
    }

    public function down()
    {
        $this->forge->dropTable('tabel_dosen');
    }
}
