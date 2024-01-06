<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProdi extends Model
{
   public function AllData()
   {
    return $this->db->table('prodi')->get()->getResultArray();
   }

   public function InsertData($data)
   {
        $this->db->table('prodi')->insert($data);
   }

   public function UpdateData($data)
   {
    $this->db->table('prodi')
        ->where('kode_prodi', $data['kode_prodi'])
        ->update($data);
   }

   public function DeleteData($data)
   {
    $this->db->table('prodi')
        ->where('kode_prodi', $data['kode_prodi'])
        ->delete($data);
   }
}
