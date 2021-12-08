<?php

namespace App\Models;

use CodeIgniter\Model;

class SparepartsModel extends Model
{
    protected $table = 'spareparts';
    protected $allowedFields = ['kode_spareparts', 'kategori_spareparts', 'merek_spareparts', 'harga_spareparts', 'stok_spareparts', 'jenis_spareparts', 'gambar'];

    public function getSpareparts($id = false)
    {
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function kodeSpareparts()
    {
        // $kode = $this->db->table('spareparts')
        // ->select('RIGHT(kode_spareparts,3) as kode_spareparts', false)
        // ->orderBy('kode_spareparts', 'DESC')
        // ->limit(1)->get()->getRowArray();


        // if($kode['kode_spareparts'] == [])
        // {
        //     $no = 1;
        // }else {
        //     $no = intval($kode['kode_spareparts']) + 1;
        // }

        // $sparepartsID = "SPD";
        // $batas = str_pad($no, 3, "0", STR_PAD_LEFT);
        // $kode_spareparts = $sparepartsID . $batas;

        // return $kode_spareparts;

        $sparepartsID = 'SPD';
        $batas = substr(uniqid(rand(), true), 5,5);
        // $batas = uniqid();
        $kode_spareparts = $sparepartsID . $batas;

        return $kode_spareparts;
    }
    
}
