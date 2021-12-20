<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TransaksiModel;
use App\Models\TselesaiModel;
use App\Models\DetailTransaksiModel;
use Spipu\Html2Pdf\Html2Pdf;

class AdminTransaksi extends BaseController {

    protected $transaksiModel;
    protected $tselesaiModel;

    public function __construct()
    {
        $this->transaksiModel = new TransaksiModel();
        $this->tselesaiModel = new TselesaiModel();
        $this->detailTransaksiModel = new DetailTransaksiModel();
        helper('number');
    }

    public function index()
    {
        $transaksi = $this->transaksiModel->findAll();
        $tselesai = $this->tselesaiModel->findAll();

        $data = [
            'title' => 'Data Transaksi',
            'user_status' => 'Admin',
            'transaksi' => $transaksi,
            'tselesai' => $tselesai,
        ];

        echo view('admin/pages/transaksi/index', $data);
    }

    public function detail($kode_transaksi)
    {
        $detailtransaksi = $this->detailTransaksiModel->detailTransaksi($kode_transaksi);
        $transaksi = $this->transaksiModel->getTransaksiByKodeTransaksi($kode_transaksi);
        $transaksiz = $this->transaksiModel->findAll();
        $data = [
            'title' => 'Detail Transaksi',
            'transaksi' => $transaksi,
            'transaksiz' => $transaksiz,
            'detailtransaksi' => $detailtransaksi,
        ];

        echo view('admin/pages/transaksi/detail', $data);

    }

    public function selesai($id)
    {   
        $this->tselesaiModel->save([
            'kode_transaksi' => $this->request->getVar('kode_transaksi'),
            'kode_customer' => $this->request->getVar('kode_customer'),
            'nama_customer' => $this->request->getVar('nama_customer'),
            'tanggal_transaksi' => $this->request->getVar('tanggal_transaksi'),
            'total_harga_transaksi' => $this->request->getVar('total_harga_transaksi'),
        ]);

        $this->transaksiModel->delete($id);

        session()->setFlashdata('message', 'Transaksi telah selesai');

        return redirect()->to(base_url('admin/admintransaksi'));

        // $ss = $this->request->getVar();

        // dd($ss);
    }
    
}

