<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customer';
    protected $useTimestamps = true;
    protected $primaryKey = 'id_customer';
    protected $allowedFields = ['kode_customer', 'nama_customer', 'username', 'password', 'alamat_customer', 'no_hp'];
    
    public function getCustomer($id_customer = false)
    {
        if($id_customer == false){
            return $this->findAll();
        }

        return $this->where(['id_customer' => $id_customer])->first();
    }
    
    public function kodeCustomer()
    {
        $transaksiID = 'CMD';
        $batas = uniqid();
        $kode_customer = $transaksiID . $batas;

        return $kode_customer;
    }
}