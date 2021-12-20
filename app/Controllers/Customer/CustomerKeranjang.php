<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use App\Models\CustomerModel;
use App\Models\TransaksiModel;
use App\Models\SparepartsModel;
use App\Models\DetailTransaksiModel;

class CustomerKeranjang extends BaseController {

    protected $customerModel;
    protected $transaksiModel;
    public function __construct()
    {
        $this->customerModel = new CustomerModel();
        $this->transaksiModel = new TransaksiModel();
        $this->sparepartsModel = new SparepartsModel();
        $this->detailTransaksiModel = new DetailTransaksiModel();
        helper('number');
    }

    public function index()
    {
        date_default_timezone_set('UTC');
        $kode_transaksi = $this->transaksiModel->kodeTransaksi();

        $data = [
            'title' => 'Keranjang',
            'user_status' => 'Customer',
            'cart' => \Config\Services::cart(),
            'kode_transaksi' => $kode_transaksi,
        ];
        
        echo view('customer/pages/keranjang/index', $data);
    }

    public function deleteitem($rowid)
    {
        $cart = \Config\Services::cart();
        $cart->remove($rowid);

        session()->setFlashdata('message', 'Item berhasil dihapus');

        return redirect()->to(base_url('customer/customerkeranjang'));
    }

    public function submitpesanan()
    {
        $cart = \Config\Services::cart();
        $keranjang = $cart->contents();
        $kode_transaksi = $this->transaksiModel->kodeTransaksi();
        $total_harga_transaksi = $cart->total();

        
        
        $this->transaksiModel->save([
            // 'kode_transaksi' => $this->request->getVar('kode_transaksi'),
            'kode_transaksi' => $kode_transaksi,
            'kode_customer' => $this->request->getVar('kode_customer'),
            'nama_customer' => $this->request->getVar('nama_customer'),
            'tanggal_transaksi' => $this->request->getVar('tanggal_transaksi'),
            'total_harga_transaksi' => $this->request->getVar('total_harga_transaksi'),
        ]);

        // $cart->destroy();

        // session()->setFlashdata('message', 'Pesanan telah selesai dibuat, silahkan datang ke Bengkel Dadangcor');

        // return redirect()->to(base_url('customer/customerkeranjang'));

        // $all = $cart->contents(['fe435e8f1df94be48831d867ffe9ef73']);
        // $getItem = $cart->getItem('fe435e8f1df94be48831d867ffe9ef73');
        // $dumpp = $getItem['id'];

        foreach ($keranjang as $key => $value)
        {
            $this->detailTransaksiModel->save([
                'kode_transaksi' => $kode_transaksi,
                'rowid' => $value['rowid'],
                'id' => $value['id'],
                'qty' => $value['qty'],
                'name' => $value['name'],
                'jenis_spareparts' => $value['options']['jenis_spareparts'],
                'merek_spareparts' => $value['options']['merek_spareparts'],
                'tanggal_booking' => $value['options']['tanggal_booking'],
                'price' => $value['price'],
                'subtotal' => $value['subtotal'],
                'total_harga_transaksi' => $total_harga_transaksi,
            ]);
        }

        $cart->destroy();

        session()->setFlashdata('message', 'Pesanan telah selesai dibuat, silahkan datang ke Bengkel Dadangcor');

        return redirect()->to(base_url('customer/customerkeranjang'));

        

        
        
    }
}