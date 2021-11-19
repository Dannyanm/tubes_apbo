<?php

namespace App\Models;

use CodeIgniter\Model;

class MekanikModel extends Model
{
    protected $table = 'mekanik';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_mekanik', 'slug', 'alamat', 'no_hp'];

    public function getMekanik($id = false)
    {
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}