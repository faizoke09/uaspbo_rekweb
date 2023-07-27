<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MataKuliah extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_mk' => [
                'type' => 'int',
                'constraint' => '11',
                'auto_increment' => true,
            ],
            'kode_mk' => [
                'type' => 'varchar',
                'constraint' => '11'
            ],
            'nama_mk' => [
                'type' => 'varchar',
                'constraint' => '20',
            ],
            'sks' => [
                'type' => 'int',
                'constraint' => '10'
            ],
        ]);


        $this->forge->addKey('id_mk');
        $this->forge->createTable('mata_kuliah');
    }

    public function down()
    {
        $this->forge->createTable('mata_kuliah');
    }
}
