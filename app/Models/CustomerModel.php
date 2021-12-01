<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customer';
    protected $useTimestamps = true;
    protected $allowedFields = ['kode_customer', 'nama_customer', 'username', 'password', 'alamat', 'no_hp'];

    public function getCustomer($id = false)
    {
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function kodeCustomer()
    {
        $kode = $this->db->table('customer')
        ->select('RIGHT(kode_customer,3) as kode_customer', false)
        ->orderBy('kode_customer', 'DESC')
        ->limit(1)->get()->getRowArray();

        if($kode['kode_customer'] == null)
        {
            $no = 1;
        }else {
            $no = intval($kode['kode_customer']) + 1;
        }

        // $tgl = date('Ymd');
        $customerID = "CMD";
        $batas = str_pad($no, 3, "0", STR_PAD_LEFT);
        $kode_customer = $customerID . $batas;

        return $kode_customer;
    }

}