<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Makul extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_mk' => 'Mk001',
                'nama_mk' => 'PBO',
                'sks' => 3,
            ],
        ];

        $this->db->table('mata_kuliah')->insertBatch($data);
    }
}
