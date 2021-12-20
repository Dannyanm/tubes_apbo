<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use App\Models\CustomerModel;
use App\Models\TransaksiModel;
use App\Models\SparepartsModel;

class CustomerOrder extends BaseController {

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

    public function tambahkeranjang()
    {
        $tanggal_booking = $this->request->getVar('tanggal_booking');

        if($tanggal_booking == null){
            $tanggal_booking = '-';
        }

        $cart = \Config\Services::cart();
        $cart->insert(array(
            'id'      => $this->request->getVar('kode_spareparts'),
            'qty'     => 1,
            'price'   => $this->request->getVar('harga_spareparts'),
            'name'    => $this->request->getVar('kategori_spareparts'),
            'options' => array(
                'jenis_spareparts' => $this->request->getVar('jenis_spareparts'), 
                'merek_spareparts' => $this->request->getVar('merek_spareparts'), 
                'tanggal_booking' => $tanggal_booking,
                )
        ));

        // for flash message
        $m_kategori = $this->request->getVar('kategori_spareparts');
        $m_merek = $this->request->getVar('merek_spareparts');

        if($m_kategori == 'Service' && $m_merek == '-'){
            session()->setFlashdata('message', 'Service berhasil ditambahkan ke keranjang');
        }else{
            session()->setFlashdata('message', 'Spareparts ' . $m_kategori . ' ' . $m_merek .' berhasil ditambahkan ke keranjang');
        }

        return redirect()->to(base_url('/customer/customerorder'));
    }

}