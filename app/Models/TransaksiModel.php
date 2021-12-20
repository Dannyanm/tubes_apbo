<?php

namespace App\Models;

use CodeIgniter\Model;
use SebastianBergmann\Invoker\Invoker;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $allowedFields = ['kode_transaksi', 'kode_customer', 'nama_customer', 'tanggal_transaksi', 'total_harga_transaksi'];

    public function getTransaksi($id = false)
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

    public function kodeTransaksi()
    {
        // $kode = $this->db->table('transaksi')
        // ->select('RIGHT(kode_transaksi,3) as kode_transaksi', false)
        // ->orderBy('kode_transaksi', 'DESC')
        // ->limit(1)->get()->getRowArray();

        // $kode = $this->db->table('transaksi')
        // ->select('id as id', false)
        // ->orderBy('id', 'DESC')
        // ->limit(1)->get()->getRowArray();

        // if($kode['id'] == null)
        // {
        //     $no = 1;
        // }else {
        //     $no = intval($kode['kode_transaksi']) + 1;
        //     $no = intval($kode['id']) + 1;
        // }
        // $no = intval($kode['id']) + 1;

        // $transaksiID = "TRD";
        // $batas = str_pad($no, 3, "0", STR_PAD_LEFT);
        // $kode_transaksi = $transaksiID . $batas;

        $transaksiID = 'TRD';
        $batas = uniqid();
        $kode_transaksi = $transaksiID . $batas;

        return $kode_transaksi;
    }
}