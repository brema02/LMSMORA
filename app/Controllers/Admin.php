<?php
//Kamis, 13 Mar 2025
namespace App\Controllers;
use App\Models\ProdiModel; //menyertakan prodimodel.php pada controller
use App\Models\MhsModel; //menyertakan mhsmodel.php pada controller

class Admin extends BaseController
{
    public function index()
    {
        $session = session();
        if($session->get('username') != '' && $session->get('login')==true){
        return view('templateadmin/v_content');
        }else{
            return redirect()->to(base_url());
        }
    }

    public function infoprodi(){
        $session = session();
        if($session->get('username') != '' && $session->get('login')==true){
        $prodiModel= new ProdiModel();
        $data = [
            'title' => 'Informasi Program Studi',
            'prodi' => $prodiModel->findAll()
        ];
        return view('v_infoprodi', $data);
        }else{
            return redirect()->to(base_url());
        }
    }

    public function inputprodi(){
        $session = session();
        if($session->get('username') != '' && $session->get('login')==true){
        return view ('v_prodi');
        }else{
            return redirect()->to(base_url());
        }
    }

    public function simpanprodi(){
        $session = session();
        $prodiModel= new ProdiModel();
        $insert = [
            'kd_prodi' => $this->request->getVar('kd_prodi'),
            'kd_jurusan' => $this->request->getVar('kd_jurusan'),
            'nama_prodi' => $this->request->getVar('nama_prodi'),
        ];
        $prodiModel->insert($insert);
        echo "Simpan data berhasil";
        if($session->get('username') != '' && $session->get('login')==true) {
        $session->setFlashdata('pesan', 
                                '<div class="alert alert-success alert-dismissible">
                                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                 <h5><i class="icon fas fa-check"></i> Data Berhasil Disimpan</h5></div>');
         return redirect()->to(base_url(). 'admin/infoprodi');
        }else{
            return redirect()->to(base_url());
        }    
        }
    

    public function infobiodata(){
        $session = session();
        if($session->get('username') != '' && $session->get('login')==true){
        $MhsModel= new MhsModel();
        $data = [
            'title' => 'Informasi Mahasiswa',
            'mhs' => $MhsModel->findAll()
        ];
        return view('v_infobiodata', $data);
        }else{
            return redirect()->to(base_url());
        }
    }
    public function inputbiodata(){
        $session = session();
        if($session->get('username') != '' && $session->get('login')==true){
        return view ('v_biodata');
        }else{
            return redirect()->to(base_url());
        }
    }

    public function simpanbiodata(){
        $session = session();
        $mhsModel = new MhsModel();
        $insert = [
         'nim' => $this->request->getVar('nim'),
         'nama' => $this->request->getVar('nama'),
         'kd_jurusan' => $this->request->getVar('kd_jurusan'),
         'kd_prodi' => $this->request->getVar('kd_prodi'),
         'alamat' => $this->request->getVar('alamat'),
         'email' => $this->request->getVar('email'),
         'no_hp' => $this->request->getVar('no_hp')];

        if($session->get('username') != '' && $session->get('login')==true) {
            if ($mhsModel->insert($insert)) {
                // Jika berhasil disimpan
                $session->setFlashdata('pesan', 
                    '<div class="alert alert-success alert-dismissible">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <h5><i class="icon fas fa-check"></i> Data Berhasil Disimpan</h5></div>');
                return redirect()->to(base_url('admin/infobiodata')); // Redirect ke halaman informasi biodata
            } else {
                // Jika gagal simpan
                $session->setFlashdata('pesan', 
                    '<div class="alert alert-danger alert-dismissible">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <h5><i class="icon fas fa-times"></i> Data Gagal Disimpan</h5></div>');
                return redirect()->to(base_url('admin/inputbiodata')); // Redirect kembali ke halaman input biodata
            }
        }else{
            return redirect()->to(base_url());
        }
    }
    public function inputmatkul(){
    $session = session();
    if($session->get('username') != '' && $session->get('login')==true){
        return view ('v_matkul');
    }else{
        return redirect()->to(base_url());
    }
    }
    public function simpanmatkul(){
        $session = session();
        if($session->get('username') != '' && $session->get('login')==true){
         $km = $this->request->getVar('km');
         $nama = $this->request->getVar('nama');
         $smt = $this->request->getVar('smt');
         $sks = $this->request->getVar('sks');
         $jam = $this->request->getVar('jam');
         echo "Kode Mata Kuliah : " .$km;
         echo "<br>Nama : " .$nama;
         echo "<br>Semester : " .$smt;
         echo "<br>SKS : " .$sks;
         echo "<br>Jam : " .$jam;
         echo ' <br> simpan data';
        //  mengirim data dengan variabel pesan dengan data nya 'data berhasil disimpan'
        $session->setFlashdata('message', ' Data Berhasil di simpan');
        //mengalihkan pengguna ke halaman lain setelah proses selesai (ke alamat admin dengan parameter input biodata)
        return redirect()->to(base_url(). 'admin/inputmatkul');
    }else{
        return redirect()->to(base_url());
    }
    }
}

