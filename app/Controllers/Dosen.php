<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelDosen;

class Dosen extends BaseController
{
    public function __construct()
    {
        $this->ModelDosen = new ModelDosen();
    }

    public function index()
    {
        $data = [
            'judul' => 'Master Data',
            'subjudul' => 'Dosen',
            'menu' => 'masterdata',
            'submenu' => 'Dosen',
            'page' => 'v-Dosen',
            'dosen' => $this->ModelDosen->AllData(),
        ];
        return view('v-template', $data);
    }

    public function InsertData()
    {
        $data = [
            'nip' => $this->request->getPost('nip'),
            'nama_dosen' => $this->request->getPost('nama_dosen'),
        ];
        $this->ModelDosen->InsertData($data);
        session()->setFlashdata('pesan', 'Data Dosen Berhasil Ditambahkan.');
        return redirect()->to('dosen');
    }

    public function UpdateData($nip)
    {
        $data = [
            'nip' => $this->request->getPost('nip'),
            'nama_dosen' => $this->request->getPost('nama_dosen'),
        ];
        $this->ModelDosen->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Dosen Telah diedit.');
        return redirect()->to('dosen');
    } 

    public function DeleteData($nip)
    {
        $data = [
            'nip' => $nip,
        ];
        $this->ModelDosen->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Dosen dihapus.');
        return redirect()->to('dosen');
    }
}
