<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin extends BaseController{

    public function index()
    {
        echo view('admin/header');
        echo view('admin/pages/home');
        echo view('admin/footer');
    }

    public function sparepart()
    {
        echo view('admin/header');
        echo view('admin/pages/sparepart');
        echo view('admin/footer');
    }

    public function booking()
    {
        echo view('admin/header');
        echo view('admin/pages/booking');
        echo view('admin/footer');
    }

    public function service()
    {
        echo view('admin/header');
        echo view('admin/pages/service');
        echo view('admin/footer');
    }
    
    public function penjualan()
    {
        echo view('admin/header');
        echo view('admin/pages/penjualan');
        echo view('admin/footer');
    }
    
    public function pembayaran()
    {
        echo view('admin/header');
        echo view('admin/pages/pembayaran');
        echo view('admin/footer');
    }
    
    public function mekanik()
    {
        echo view('admin/header');
        echo view('admin/pages/mekanik');
        echo view('admin/footer');
    }
    
    public function barang()
    {
        echo view('admin/header');
        echo view('admin/pages/barang');
        echo view('admin/footer');
        
    }
    
    public function grafik()
    {
        echo view('admin/header');
        echo view('admin/pages/grafik');
        echo view('admin/footer');
    }

}

