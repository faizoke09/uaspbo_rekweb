<?php

namespace App\Models;

use CodeIgniter\Model;

class MakulModel extends Model{
    
    protected $table = 'mata_kuliah';
    protected $primaryKey ='id_mk';
    protected $protectField = true;
    protected $allowedFields = ['kode_mk','nama_mk','sks'];
  
}


   