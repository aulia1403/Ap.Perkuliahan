<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMatkul extends Model
{
   public function AllData()
   {
    return $this->db->table('matakuliah')->get()->getResultArray();
   }

   public function InsertData($data)
   {
        $this->db->table('matakuliah')->insert($data);
   }

   public function UpdateData($data)
   {
    $this->db->table('matakuliah')
        ->where('kode_matkul', $data['kode_matkul'])
        ->update($data); 
   }

   public function DeleteData($data)
   {
    $this->db->table('matakuliah')
        ->where('kode_matkul', $data['kode_matkul'])
        ->delete($data);
   }
}
