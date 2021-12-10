<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use App\Models\CustomerModel;
use App\Models\TransaksiModel;
use App\Models\SparepartsModel;

class Keranjang extends BaseController {

    protected $customerModel;
    protected $transaksiModel;
    public function __construct()
    {
        $this->customerModel = new CustomerModel();
        $this->transaksiModel = new TransaksiModel();
        $this->sparepartsModel = new SparepartsModel();
        helper('number');
    }

    public function index()
    {
        $kode_transaksi = $this->transaksiModel->kodeTransaksi();

        $data = [
            'title' => 'Keranjang',
            'user_status' => 'Customer',
            'cart' => \Config\Services::cart(),
            'kode_transaksi' => $kode_transaksi,
        ];
        
        echo view('customer/pages/keranjang/index', $data);
    }
}