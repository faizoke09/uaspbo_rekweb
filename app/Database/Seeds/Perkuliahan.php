<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Perkuliahan extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_mk' => 'mk2',
                'nip' => '21111',
                'jadwal' => 'senin,10.00 - 12.00'
            ],
        ];
        $this->db->table('jadwal_perkuliahan')->insertBatch($data);
    }
}
