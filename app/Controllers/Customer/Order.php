<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use App\Models\CustomerModel;
use App\Models\TransaksiModel;

class Order extends BaseController {

    protected $customerModel;
    protected $transaksiModel;
    public function __construct()
    {
        $this->customerModel = new CustomerModel();
        $this->transaksiModel = new TransaksiModel();
    }
    
    public function index()
    {
        $data = [
            'title' => 'Order',
            'user_status' => 'Customer'
        ];

        echo view('customer/pages/order/index', $data);
    }

    public function service()
    {
        $kode_transaksi = $this->transaksiModel->kodeTransaksi();
        $data = [
            'title' => 'Booking Service',
            'user_status' => 'Customer',
            'kode_transaksi' => $kode_transaksi,
        ];

        echo view('customer/pages/order/service', $data);
    }

    public function save()
    {
        // validation
        if(!$this->validate([
            'nama_customer' => [
                'rules' => 'required[transaksi.nama_customer]',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],
            'tanggal_transaksi' => [
                'rules' => 'required[transaksi.tanggal_transaksi]',
                'errors' => [
                    'required' => 'Tanggal harus diisi'
                ]
            ],
            'harga_transaksi' => [
                'rules' => 'required[transaksi.harga_transaksi]',
                'errors' => [
                    'required' => 'Tipe Motor harus diisi'
                ]
            ]
        ])){

            $validation = \Config\Services::validation();

            return redirect()->to(base_url('/customer/order/service'))->withInput()->with('message', 'Cek kembali, pastikan data diinput dengan benar!');
        }

        $kode_transaksi = $this->transaksiModel->kodeTransaksi();
        $this->transaksiModel->save([
            'kode_transaksi' => $kode_transaksi,
            'nama_customer' => $this->request->getVar('nama_customer'),
            'jenis_transaksi' => $this->request->getVar('jenis_transaksi'),
            'tanggal_transaksi' => $this->request->getVar('tanggal_transaksi'),
            'harga_transaksi' => $this->request->getVar('harga_transaksi'),
        ]);

        session()->setFlashdata('message', 'Proses Booking Service anda telah selesai dipesan, silahkan datang ke Bengkel Dadangcor sesuai dengan tanggal yang dipilih pada jam 09:00');

        return redirect()->to(base_url('/customer/order'));

        // $ss = $this->request->getVar();
        // dd($ss);
    }
}