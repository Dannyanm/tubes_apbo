<?php

namespace App\Models;

use CodeIgniter\Model;
use SebastianBergmann\Invoker\Invoker;

class DetailTransaksiModel extends Model
{
    protected $table = 'detail_transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $allowedFields = ['id_transaksi', 'kode_transaksi', 'rowid', 'id', 'qty', 'name', 'jenis_spareparts', 'merek_spareparts', 'tanggal_booking', 'price', 'subtotal', 'total_harga_transaksi'];

    public function getTransaksi($id_transaksi = false)
    {
        if($id_transaksi == false){
            return $this->findAll();
        }
        

        return $this->where(['id_transaksi' => $id_transaksi])->first();
    }

    public function kodeTransaksi()
    {

        $transaksiID = 'TRD';
        $batas = uniqid();
        $kode_transaksi = $transaksiID . $batas;

        return $kode_transaksi;
    }

    public function detailTransaksi($kode_transaksi)
    {
        if($kode_transaksi == false)
        {
            return $this->findAll();
        }

        return $this->where(['kode_transaksi' => $kode_transaksi])->findAll();
    }
}