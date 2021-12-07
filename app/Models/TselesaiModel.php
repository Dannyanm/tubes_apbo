<?php

namespace App\Models;

use CodeIgniter\Model;

class TselesaiModel extends Model 
{
    protected $table = 'transaksi_selesai';
    protected $allowedFields = ['kode_transaksi', 'nama_customer', 'jenis_transaksi', 'tanggal_transaksi', 'harga_transaksi'];

    public function getTselesai($id = false)
    {
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();

    }

    


}