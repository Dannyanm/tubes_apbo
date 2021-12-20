<?php

namespace App\Models;

use CodeIgniter\Model;

class TselesaiModel extends Model 
{
    protected $table = 'transaksi_selesai';
    protected $allowedFields = ['kode_transaksi', 'kode_customer', 'nama_customer', 'tanggal_transaksi', 'total_harga_transaksi'];

    public function getTselesai($id = false)
    {
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();

    }

    public function getTransaksiByKodeTransaksi($kode_transaksi)
    {
        if($kode_transaksi == false)
        {
            return $this->findAll();
        }

        return $this->where(['kode_transaksi' => $kode_transaksi])->first();
    }

    


}