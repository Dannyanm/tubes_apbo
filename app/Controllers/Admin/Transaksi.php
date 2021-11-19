<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Transaksi extends BaseController {

    public function index()
    {
        $data = [
            'title' => 'Data Transaksi',
            'user_status' => 'Admin'
        ];
        echo view('admin/pages/transaksi/index', $data);
    }
    
}

