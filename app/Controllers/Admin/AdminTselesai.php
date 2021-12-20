<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TransaksiModel;
use App\Models\TselesaiModel;
use App\Models\DetailTransaksiModel;
use Spipu\Html2Pdf\Html2Pdf;

class AdminTselesai extends BaseController {

    protected $transaksiModel;
    protected $tselesaiModel;

    public function __construct()
    {
        $this->transaksiModel = new TransaksiModel();
        $this->tselesaiModel = new TselesaiModel();
        $this->detailTransaksiModel = new DetailTransaksiModel();
        helper('number');
    }

    public function detail($kode_transaksi)
    {
        $detailtransaksi = $this->detailTransaksiModel->detailTransaksi($kode_transaksi);
        $transaksi = $this->tselesaiModel->getTransaksiByKodeTransaksi($kode_transaksi);
        $data = [
            'title' => 'Detail Transaksi',
            'transaksi' => $transaksi,
            'detailtransaksi' => $detailtransaksi,
        ];

        echo view('admin/pages/transaksiselesai/index', $data);

    }

    public function cetakbukti($kode_transaksi)
    {
        $detailtransaksi = $this->detailTransaksiModel->detailTransaksi($kode_transaksi);
        $transaksi = $this->tselesaiModel->getTransaksiByKodeTransaksi($kode_transaksi);
        $transaksiz = $this->transaksiModel->findAll();
        $data = [
            'title' => 'Detail Transaksi',
            'transaksi' => $transaksi,
            'detailtransaksi' => $detailtransaksi,
            'transaksiz' => $this->transaksiModel->findAll(),
        ];

        echo view('admin/pages/transaksiselesai/cetakbukti', $data);
        


    }
    
}

