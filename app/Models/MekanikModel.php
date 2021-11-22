<?php

namespace App\Models;

use CodeIgniter\Model;

class MekanikModel extends Model
{
    protected $table = 'mekanik';
    protected $useTimestamps = true;
    protected $allowedFields = ['kode_mekanik', 'nama_mekanik', 'slug', 'alamat', 'no_hp'];

    public function getMekanik($id = false)
    {
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function kodeMekanik()
    {
        $kode = $this->db->table('mekanik')
        ->select('RIGHT(kode_mekanik,3) as kode_mekanik', false)
        ->orderBy('kode_mekanik', 'DESC')
        ->limit(1)->get()->getRowArray();

        if($kode['kode_mekanik'] == null)
        {
            $no = 1;
        }else {
            $no = intval($kode['kode_mekanik']) + 1;
        }

        // $tgl = date('Ymd');
        $mekanikID = "MKD";
        $batas = str_pad($no, 3, "0", STR_PAD_LEFT);
        $kode_mekanik = $mekanikID . $batas;

        return $kode_mekanik;
    }

}