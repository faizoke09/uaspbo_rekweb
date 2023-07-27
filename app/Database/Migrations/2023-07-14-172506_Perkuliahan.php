<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Perkuliahan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jadwal' => [
                'type' => 'int',
                'constraint' => '11',
                'auto_increment' => true,
            ],
            'nip' => [
                'type' => 'int',
                'constraint' => '11',
            ],
            'kode_mk' => [
                'type' => 'varchar',
                'constraint' => '20'
            ],
            'jadwal' => [
                'type' => 'varchar',
                'constraint' => 20,
            ],
        ]);

        $this->forge->createTable('jadwal_perkuliahan');
    }

    public function down()
    {
        $this->forge->dropTable('jadwal_perkuliahan');
    }
}
