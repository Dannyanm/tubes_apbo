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
        echo view('admin/pages/home', $data);
    }
    
    public function booking()
    {
        $data = [
            'title' => 'Data Booking',
            'user_status' => 'Admin'
        ];
        echo view('admin/pages/booking', $data);
    }
    
    public function mekanik()
    {
        $data = [
            'title' => 'Data Mekanik',
            'user_status' => 'Admin'
        ];
        echo view('admin/pages/mekanik', $data);
    }
    
    public function member()
    {
        $data = [
            'title' => 'Data Member',
            'user_status' => 'Admin'
        ];
        echo view('admin/pages/member', $data);
    }

    public function pembayaran()
    {
        $data = [
            'title' => 'Data Pembayaran',
            'user_status' => 'Admin'
        ];
        echo view('admin/pages/pembayaran', $data);
    }

    public function penjualan()
    {
        $data = [
            'title' => 'Data Penjualan',
            'user_status' => 'Admin'
        ];
        echo view('admin/pages/penjualan', $data);
    }

    public function service()
    {
        $data = [
            'title' => 'Data Service',
            'user_status' => 'Admin'
        ];
        echo view('admin/pages/service', $data);
    }

    // data barang diganti jadi spareparts
    public function spareparts()
    {
        $data = [
            'title' => 'Data Spareparts',
            'user_status' => 'Admin'
        ];
        echo view('admin/pages/spareparts', $data);
    }
    
}

