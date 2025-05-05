<?php
// Kamis, 13 Mar 2025
namespace App\Controllers;
use App\Models\UserModel; //menyertakan usermodel.php pada controller
use CodeIgniter\I18n\Time;

class Home extends BaseController
{
    public function index(): string
    {
        $session= session();
        $data['isLoggedIn'] = $session->get('login') === true;
        $session->setFlashdata('pesan', 
                                '<div class="alert alert-success alert-dismissible">
                                 <h5><i class="icon fas fa-check"></i> Selamat Datang, $user </h5></div>');
        return view('/MainPage/index');
    }

    public function logout() {
        $session = session();
        $this->$session->sess_destroy();
        redirect('login'); // Redirect to login page after logout
    }

    public function ceklogin()
    {
        //tangkap varabel yang dikirim dari form login username dan password
        $session = session();
        $username = $this->request->getVar('username'); // ambil data username di database
        $password = $this->request->getVar('password'); // Get password from input
        
        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if ($user && $this->verifyPassword($password, $user['password'])) {

            // Login successful
            $session->set('username', $user['username']);
            $session->set('full_name', $user['full_name']);
            $session->set('login', true);
            return redirect()->to(base_url());

        } else {
            $session->setFlashdata('pesan', 
                                '<div class="alert alert-danger alert-dismissible">
                                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                 <h5><i class="icon fas fa-times"></i> Username/Password Salah</h5></div>');
         return redirect()->to(site_url('login'));
        }
    }

    public function hashPassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function verifyPassword($password, $hashedPassword)
    {
        return password_verify($password, $hashedPassword);
    }

    public function inputUser(){
        $userModel = new UserModel();
        $data = [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => $this->hashPassword($this->request->getVar('password')),
            'full_name' => $this->request->getVar('full_name'),
            'role' => $this->request->getVar('role'),
            'profile_pic_url' => $this->request->getVar('profile_pic_url'),
            'date_birth' => $this->request->getVar('date_birth'),
            'gender' => $this->request->getVar('gender'),
            'phone' => $this->request->getVar('phone'),
            'address' => $this->request->getVar('address'),
            'created_at' => Time::now('Asia/Jakarta')->toDateTimeString(),
            'updated_at' => Time::now('Asia/Jakarta')->toDateTimeString()
        ];
        if ($userModel->insert($data)) {
            session()->setFlashdata('success', 'User berhasil ditambahkan.');
            return redirect()->to(base_url());
        } else {
            session()->setFlashdata('error', 'Gagal menambahkan user.');
            return redirect()->back()->withInput();
        }
    }
}
