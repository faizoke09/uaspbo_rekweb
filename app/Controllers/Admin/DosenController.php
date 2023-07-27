<?php 

namespace App\Controllers\Admin;

use App\Models\DosenModel;
use App\Controllers\BaseController;

class DosenController extends BaseController{
    public function viewDosen(){
        $data['activePage'] = 'dosen';
        $model = new DosenModel();
        $data['dosen'] = $model->findAll();

        return view('Dosen/dosen',$data);
    }
    public function tambahDosen(){
        $data['activePage'] = 'dosen';
        return view('Dosen/tambah_dosen',$data);
    }
    public function saveDosen(){
        $model = new DosenModel();
        if($this->request->getMethod() === 'post'){
        $data = [
            'nip' => $this->request->getPost('nip'),
            'nama' => $this->request->getPost('nama'),
        ];
        $model->insert($data);
        //echo "berhasil";
        return redirect()->to('Dosen/dosen');
    }
    }
    public function editDosen($id){
        $data['activePage'] = 'dosen';
        $model = new DosenModel();
        $query = $model->table('tabel_dosen');
        $hasil = $query->getWhere(['id_dosen' => $id])->getRow();
        $data['edit'] = $hasil;

        return view('Dosen/edit_dosen',$data);
    }

    public function updateDosen(){
        $model = new DosenModel();
        $id = $this->request->getVar('id_dosen');
        $data = [
            'nip' => $this->request->getPost('nip'),
            'nama' => $this->request->getPost('nama'),
        ];

        $model->where('id_dosen',$id)->set($data)->update();
        return redirect()->to('Dosen/dosen');
    }
    public function deleteDosen($id){
        $model = new DosenModel();

        $query = $model->table('tabel_dosen');
        $hasil = $query->where('id_dosen',$id);
        $hasil->delete();

        return redirect()->to('Dosen/dosen');
    }
}
