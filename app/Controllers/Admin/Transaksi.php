<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TransaksiModel;
use App\Models\TselesaiModel;

class Transaksi extends BaseController {

    protected $transaksiModel;
    protected $tselesaiModel;
    public function __construct()
    {
        $this->transaksiModel = new TransaksiModel();
        $this->tselesaiModel = new TselesaiModel();
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

    public function selesai($id)
    {   
        $this->tselesaiModel->save([
            'kode_transaksi' => $this->request->getVar('kode_transaksi'),
            'nama_customer' => $this->request->getVar('nama_customer'),
            'jenis_transaksi' => $this->request->getVar('jenis_transaksi'),
            'tanggal_transaksi' => $this->request->getVar('tanggal_transaksi'),
            'harga_transaksi' => $this->request->getVar('harga_transaksi'),
        ]);

        $this->transaksiModel->delete($id);


        session()->setFlashdata('message', 'Transaksi  telah selesai');

        return redirect()->to(base_url('admin/transaksi'));

        // $ss = $this->request->getVar();

        // dd($ss);
    }
    
}

