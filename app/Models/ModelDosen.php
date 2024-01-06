<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDosen extends Model
{
   public function AllData()
   {
    return $this->db->table('dosen')->get()->getResultArray();
   }

   public function InsertData($data)
   {
        $this->db->table('dosen')->insert($data);
   }

   public function UpdateData($data)
   {
    $this->db->table('dosen')
        ->where('nip', $data['nip'])
        ->update($data);
   }

   public function DeleteData($data)
   {
    $this->db->table('dosen')
        ->where('nip', $data['nip'])
        ->delete($data);
   }

   public function LoginUser($email,$password)
   {
     return $this->db->table('user')
     ->where([
          'email' => $email,
          'password' => $password,
     ])->get()->getRowArray();
   }
}
