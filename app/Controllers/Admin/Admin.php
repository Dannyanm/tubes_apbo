<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin extends BaseController{

    public function index()
    {
        return view('admin/home');
    }

    public function sparepart()
    {
        return view('admin/sparepart');
    }

    public function booking()
    {
        return view('admin/booking');
    }

    public function service()
    {
        return view('admin/service');
    }
    
    public function penjualan()
    {
        return view('admin/penjualan');
    }
    
    public function pembayaran()
    {
        return view('admin/pembayaran');
    }
    
    public function mekanik()
    {
        return view('admin/mekanik');
    }
    
    public function barang()
    {
        return view('admin/barang');
    }
    
    public function grafik()
    {
        return view('admin/grafik');
    }

}

