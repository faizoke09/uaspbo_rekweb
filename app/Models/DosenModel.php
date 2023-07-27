<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model{
    
    protected $table = 'tabel_dosen';
    protected $primaryKey ='id_dosen';
    protected $protectField = true;
    protected $allowedFields = ['nip','nama'];
     

}


   