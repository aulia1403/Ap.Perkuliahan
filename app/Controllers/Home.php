<?php

namespace App\Controllers;
use App\Models\ModelMatkul;

class Home extends BaseController
{
    public function __construct()
    {
        $this->ModelMatkul = new ModelMatkul();
    }
    
    public function index(): string
    {
        $data = [
            'judul' => 'Login',
        ];
        return view('v-login', $data);
    }

    public function CekLogin()
    {
        if ($this->validate([
            'email' => [
                'label' => 'email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Masih Kosong !',
                ]
            ],
            'password' => [
                'label' => 'password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Masih Kosong !!',
                ]
            ]
        ])) {
            $email = $this->request->getPost('email');
            $password = sha1($this->request->getPost('password'));
            $cek_login = $this->ModelDosen->CekLogin($email,$password);
            if ($cek_login) {
                session()->set('id_user',$cek_login['id_user']);
                session()->set('nama_user',$cek_login['nama_user']);
                session()->set('level',$cek_login['level']);
            } else {
                session()->setFlashdata('pesan', 'email atau password salah');
                return redirect()->to(base_url('Home'));
            }
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Home'))->withInput('validation', \Config\Services::validation());
        }
    }
}
