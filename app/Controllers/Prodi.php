<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelProdi;

class Prodi extends BaseController
{
    public function __construct()
    {
        $this->ModelProdi = new ModelProdi();
    }

    public function index()
    {
        $data = [
            'judul' => 'Master Data',
            'subjudul' => 'Prodi',
            'menu' => 'masterdata',
            'submenu' => 'Prodi',
            'page' => 'v-Prodi',
            'prodi' => $this->ModelProdi->AllData(),
        ];
        return view('v-template', $data);
    }

    public function InsertData()
    {
        $data = [
            'kode_prodi' => $this->request->getPost('kode_prodi'),
            'nama_prodi' => $this->request->getPost('nama_prodi'),
        ];
        $this->ModelProdi->InsertData($data);
        session()->setFlashdata('pesan', 'Data Prodi Berhasil Ditambahkan.');
        return redirect()->to('prodi');
    }

    public function UpdateData($kode_prodi)
    {
        $data = [
            'kode_prodi' => $this->request->getPost('kode_prodi'),
            'nama_prodi' => $this->request->getPost('nama_prodi'),
        ];
        $this->ModelProdi->UpdateData($data);
        session()->setFlashdata('pesan', 'Data prodi Telah diedit.');
        return redirect()->to('prodi');
    }

    public function DeleteData($kode_prodi)
    {
        $data = [
            'kode_prodi' => $kode_prodi,
        ];
        $this->ModelProdi->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Prodi dihapus.');
        return redirect()->to('prodi');
    }
}


