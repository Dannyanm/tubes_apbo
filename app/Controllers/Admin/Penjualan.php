<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Penjualan extends BaseController{

    public function index()
    {
        $data = [
            'title' => 'Data Penjualan',
            'user_status' => 'Admin'
        ];
        echo view('admin/pages/penjualan/penjualan', $data);
    }
    
}

