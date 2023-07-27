<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model{
    
    protected $table = 'jadwal_perkuliahan';
    protected $primaryKey ='id_jadwal';
    protected $protectField = true;
    protected $allowedFields = ['nip','kode_mk','jadwal'];
     

}


   