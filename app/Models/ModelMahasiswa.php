<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model
{
   public function AllData()
   {
    return $this->db->table('mahasiswa')->get()->getResultArray();
   }

   public function InsertData($data)
   {
        $this->db->table('mahasiswa')->insert($data);
   }

   public function UpdateData($data)
   {
    $this->db->table('mahasiswa')
        ->where('nim', $data['nim'])
        ->update($data);
   }

   public function DeleteData($data)
   {
    $this->db->table('mahasiswa')
        ->where('nim', $data['nim'])
        ->delete($data);
   }
}
