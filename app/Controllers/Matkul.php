<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelMatkul;

class Matkul extends BaseController
{
    public function __construct()
    {
        $this->ModelMatkul = new ModelMatkul();
    }

    public function index()
    {
        $data = [
            'judul' => 'Master Data',
            'subjudul' => 'Matkul',
            'menu' => 'masterdata',
            'submenu' => 'Matkul',
            'page' => 'v-matkul',
            'Matkul' => $this->ModelMatkul->AllData(),
        ];
        return view('v-template', $data);
    }

    public function InsertData()
    {
        $data = [
            'kode_matkul' => $this->request->getPost('kode_matkul'),
            'nama_matkul' => $this->request->getPost('nama_matkul'),
            'sks' => $this->request->getPost('sks'),
        ];
        $this->ModelMatkul->InsertData($data);
        session()->setFlashdata('pesan', 'Data Matkul Berhasil Ditambahkan.');
        return redirect()->to('Matkul');
    }

    public function UpdateData($kode_matkul)
    {
        $data = [
            'kode_matkul' => $this->request->getPost('kode_matkul'),
            'nama_matkul' => $this->request->getPost('nama_matkul'),
            'sks' => $this->request->getPost('sks'),
        ];
        $this->ModelMatkul->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Matkul Telah diedit.');
        return redirect()->to('Matkul');
    }

    public function DeleteData($kode_matkul)
    {
        $data = [
            'kode_matkul' => $kode_matkul,
        ];
        $this->ModelMatkul->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Matkul dihapus.');
        return redirect()->to('Matkul');
    }
}

