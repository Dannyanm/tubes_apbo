<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use App\Models\CustomerModel;
use App\Models\TransaksiModel;
use App\Models\SparepartsModel;

class Order extends BaseController {

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
        $spareparts = $this->sparepartsModel->findAll();
        $serviceID = 'SER';
        $batas = substr(uniqid(rand(), true), 5,5);
        $kode_service = $serviceID . $batas;
        $data = [
            'title' => 'Order',
            'user_status' => 'Customer',
            'spareparts' => $spareparts,
            'kode_transaksi' => $kode_transaksi,
            'kode_service' => $kode_service,
        ];
        echo view('customer/pages/order/index', $data);
    }

    public function oservice()
    {
        $serviceID = 'SER';
        $batas = substr(uniqid(rand(), true), 5,5);
        $kode_service = $serviceID . $batas;
        $data = [
            'title' => 'Booking Service',
            'user_status' => 'Customer',
            'kode_service' => $kode_service,
        ];

        echo view('customer/pages/order/oservice', $data);
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

    // public function order()
    // {
    //     $kode_transaksi = $this->transaksiModel->kodeTransaksi();
    //     $spareparts = $this->sparepartsModel->findAll();
    //     $serviceID = 'SER';
    //     $batas = substr(uniqid(rand(), true), 5,5);
    //     $kode_service = $serviceID . $batas;
    //     $data = [
    //         'title' => 'Booking Service',
    //         'user_status' => 'Customer',
    //         'spareparts' => $spareparts,
    //         'kode_transaksi' => $kode_transaksi,
    //         'kode_service' => $kode_service,
    //     ];
    //     echo view('customer/pages/order/index', $data);
    // }

    public function ospareparts()
    {
        $cart = \Config\Services::cart();
        $cart->insert(array(
            'id'      => $this->request->getVar('kode_spareparts'),
            'qty'     => 1,
            'price'   => $this->request->getVar('harga_spareparts'),
            'name'    => $this->request->getVar('kategori_spareparts'),
            'options' => array(
                'jenis_spareparts' => $this->request->getVar('jenis_spareparts'), 
                'merek_spareparts' => $this->request->getVar('merek_spareparts'), 
                )
        ));

        // for flash message
        $m_kategori = $this->request->getVar('kategori_spareparts');
        $m_merek = $this->request->getVar('merek_spareparts');

        session()->setFlashdata('message', 'Spareparts ' . $m_kategori . ' ' . $m_merek .' berhasil ditambahkan ke keranjang');

        return redirect()->to(base_url('/customer/order'));
    }

    public function updateKeranjang()
    {

    }

}