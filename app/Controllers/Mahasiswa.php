<?php

namespace App\Controllers;
 
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelMahasiswa;

class Mahasiswa extends BaseController
{
    public function __construct()
    {
        $this->ModelMahasiswa = new ModelMahasiswa();
    }

    public function index()
    {
        $data = [
            'judul' => 'Master Data',
            'subjudul' => 'Mahasiswa',
            'menu' => 'masterdata',
            'submenu' => 'mahasiswa',
            'page' => 'v-mahasiswa',
            'mahasiswa' => $this->ModelMahasiswa->AllData(),
        ];
        return view('v-template', $data);
    }

    public function InsertData()
    {
        $data = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'prodi' => $this->request->getPost('prodi'),
            'semester' => $this->request->getPost('semester'),
            'kelas' => $this->request->getPost('kelas'),
            'alamat' => $this->request->getPost('alamat'),
        ];
        $this->ModelMahasiswa->InsertData($data);
        session()->setFlashdata('pesan', 'Data Mahasiswa Berhasil Ditambahkan.');
        return redirect()->to('mahasiswa');
    }

    public function UpdateData($nim)
    {
        $data = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'prodi' => $this->request->getPost('prodi'),
            'semester' => $this->request->getPost('semester'),
            'kelas' => $this->request->getPost('kelas'),
            'alamat' => $this->request->getPost('alamat'),
        ];
        $this->ModelMahasiswa->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Mahasiswa Telah diedit.');
        return redirect()->to('mahasiswa');
    }

    public function DeleteData($nim)
    {
        $data = [
            'nim' => $nim,
        ];
        $this->ModelMahasiswa->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Mahasiswa dihapus.');
        return redirect()->to('mahasiswa');
    }
}
