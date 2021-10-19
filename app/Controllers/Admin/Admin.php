<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin extends BaseController{

    public function index()
    {
        echo view('admin/home');
    }

    public function sparepart()
    {
        echo view('admin/sparepart');
    }

    public function booking()
    {
        echo view('admin/booking');
    }

    public function service()
    {
        echo view('admin/service');
    }
    
    public function penjualan()
    {
        echo view('admin/penjualan');
    }
    
    public function pembayaran()
    {
        echo view('admin/pembayaran');
    }
    
    public function mekanik()
    {
        echo view('admin/mekanik');
    }
    
    public function barang()
    {
        echo view('admin/barang');
    }
    
    public function grafik()
    {
        echo view('admin/grafik');
    }

}

