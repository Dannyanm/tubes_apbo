<?php

namespace App\Controllers\Admin\Penjualan;

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

