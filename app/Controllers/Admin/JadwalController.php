<?php 

namespace App\Controllers\Admin;

use App\Models\JadwalModel;
use App\Controllers\BaseController;

class JadwalController extends BaseController{
    public function index(){
        $data['activePage'] = 'jadwal';
       $db = \Config\Database::connect();
       $model = $db->query('SELECT p.*, k.*, d.* FROM jadwal_perkuliahan p JOIN mata_kuliah k ON p.kode_mk = k.kode_mk JOIN tabel_dosen d ON p.nip = d.nip');
       $data['jadwal'] = $model->getResult();
       return view('jadwal',$data);
    }
    public function tambahJadwal(){
        $data['activePage'] = 'jadwal';
        $db = \Config\Database::connect();
        $dosen = $db->query("SELECT * FROM tabel_dosen");
        $makul = $db->query("SELECT * FROM mata_kuliah");

        $data['dosen'] = $dosen->getResult();
        $data['makul'] = $makul->getResult();
        
        return view('Jadwal/tambah_jadwal',$data);
    }
    public function saveJadwal(){
        $db = new JadwalModel();
        if($this->request->getMethod() === 'post'){
            $hari = $this->request->getPost('hari');
            $waktuMulai = $this->request->getPost('waktu_mulai');
            $waktuSelesai = $this->request->getPost('waktu_selesai');
            $jadwal = $hari . ',' . $waktuMulai. '-' .$waktuSelesai;
            $data = [
                'nip' => $this->request->getPost('nip'),
                'kode_mk' => $this->request->getPost('kode_mk'),
                'jadwal' => $jadwal,
            ];

            $db->insert($data);
            
            return redirect()->to('jadwal');
        }
        
    }
    public function editJadwal($id){
        $data['activePage'] = 'jadwal';
        $db = \Config\Database::connect();

        $dosen = $db->query("SELECT * FROM tabel_dosen");
        $makul = $db->query("SELECT * FROM mata_kuliah");
        $data['dosen'] = $dosen->getResult();
        $data['makul'] = $makul->getResult();

        $query = $db->table('jadwal_perkuliahan');
        $hasil = $query->getWhere(['id_jadwal' => $id])->getRow();
        $data['view'] = $hasil;

        return view('Jadwal/edit_jadwal',$data);
    }

    public function updateJadwal(){ 
        if($this->request->getMethod() === 'post'){
            $db = new JadwalModel();
            $id = $this->request->getVar('id_jadwal');
            $hari = $this->request->getPost('hari');
            $waktuMulai = $this->request->getPost('waktu_mulai');
            $waktuSelesai = $this->request->getPost('waktu_selesai');
            $jadwal = $hari . ',' . $waktuMulai. '-' .$waktuSelesai;
            $data = [

                'nip' => $this->request->getPost('nip'),
                'kode_mk' => $this->request->getPost('kode_mk'),
                'jadwal' => $jadwal,
            ];

            $db->where('id_jadwal',$id)->set($data)->update();
            
            return redirect()->to('jadwal');
        }
    }


    public function deleteJadwal($id){
        $db = \Config\Database::connect();
        $query = $db->table('jadwal_perkuliahan');
        $hasil = $query->where('id_jadwal',$id);
        $hasil->delete();

        return redirect()->to('jadwal');
    }

    public function viewDetail($id){
        $data['activePage'] = 'jadwal';
        $db = \Config\Database::connect();
        
        $model = $db->query('SELECT p.*, k.*, d.* FROM jadwal_perkuliahan p JOIN mata_kuliah k ON p.kode_mk = k.kode_mk JOIN tabel_dosen d ON p.nip = d.nip');
        $data['jadwal'] = $model->getResult();

        $query = $db->table('jadwal_perkuliahan');
        $hasil = $query->getWhere(['id_jadwal' => $id]);
        $data['view'] = $hasil;

        return view('Jadwal/viewDetail',$data);
        // return json_encode(array(
        //     'data' => $data,
        // ));
    }
}
