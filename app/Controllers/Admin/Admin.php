<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin extends BaseController{

    public function index()
    {
        $data = [
            'title' => 'Home Admin',
            'user_status' => 'Admin'
        ];
        echo view('admin/header', $data);
        echo view('admin/pages/home');
        echo view('admin/footer');
    }

    // data barang diganti jadi spareparts
    public function spareparts()
    {
        $data = [
            'title' => 'Data Spareparts',
            'user_status' => 'Admin'
        ];
        echo view('admin/header', $data);
        echo view('admin/pages/spareparts');
        echo view('admin/footer');
    }

    public function booking()
    {
        $data = [
            'title' => 'Data Booking',
            'user_status' => 'Admin'
        ];
        echo view('admin/header', $data);
        echo view('admin/pages/booking');
        echo view('admin/footer');
    }

    public function service()
    {
        $data = [
            'title' => 'Data Service',
            'user_status' => 'Admin'
        ];
        echo view('admin/header', $data);
        echo view('admin/pages/service');
        echo view('admin/footer');
    }
    
    public function penjualan()
    {
        $data = [
            'title' => 'Data Penjualan',
            'user_status' => 'Admin'
        ];
        echo view('admin/header', $data);
        echo view('admin/pages/penjualan');
        echo view('admin/footer');
    }
    
    public function pembayaran()
    {
        $data = [
            'title' => 'Data Pembayaran',
            'user_status' => 'Admin'
        ];
        echo view('admin/header', $data);
        echo view('admin/pages/pembayaran');
        echo view('admin/footer');
    }
    
    public function mekanik()
    {
        $data = [
            'title' => 'Data Mekanik',
            'user_status' => 'Admin'
        ];
        echo view('admin/header', $data);
        echo view('admin/pages/mekanik');
        echo view('admin/footer');
    }
    
    public function grafik()
    {
        $data = [
            'title' => 'Grafik',
            'user_status' => 'Admin'
        ];
        echo view('admin/header', $data);
        echo view('admin/pages/grafik');
        echo view('admin/footer');
    }

}

