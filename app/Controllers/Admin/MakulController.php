<?php 

namespace App\Controllers\Admin;

use App\Models\MakulModel;
use App\Controllers\BaseController;

class MakulController extends BaseController{
    public function viewMakul(){
        $data['activePage'] = 'mata-kuliah';
        $model = new MakulModel();
        $data['makul'] = $model->findAll();

        return view('Makul/makul',$data);
    }
    public function tambahMakul(){
        $data['activePage'] = 'mata-kuliah';
        return view('Makul/tambah_makul',$data);
    }
    public function saveMakul(){
        $model = new MakulModel();
        
        if ($this->request->getMethod() === 'post') {
        $data = [
            'kode_mk' => $this->request->getPost('kode_mk'),
            'nama_mk' => $this->request->getPost('nama_mk'),
            'sks' => $this->request->getPost('sks'),
        ];

        $model->insert($data);

        return redirect()->to('Makul/makul');
        }

    }
    public function editMakul($id){
        $data['activePage'] = 'mata-kuliah';
        $model = new MakulModel();
        $query = $model->table('mata_kuliah');
        $hasil = $query->getWhere(['id_mk'=> $id])->getRow();
        $data['makul'] = $hasil;

        return view('Makul/edit_makul',$data);
    }

    public function updateMakul(){
        $model = new MakulModel();
        if($this->request->getMethod() === 'post'){
        $kode = $this->request->getVar('id_mk');
        $data  = [
            'kode_mk' => $this->request->getPost('kode_mk'),
            'nama_mk' => $this->request->getPost('nama_mk'),
            'sks' => $this->request->getPost('sks'),
        ];
        $model->where('id_mk', $kode)->set($data)->update();
        return redirect()->to('Makul/makul');
        }
    }

    public function deleteMakul($id){
        $model = new MakulModel();
        $query = $model->table('mata_kuliah');
        $hasil = $query->where('id_mk',$id);
        $hasil->delete();

        return redirect()->to('Makul/makul');
    }
}
