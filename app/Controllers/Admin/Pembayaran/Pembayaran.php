<?php

namespace App\Controllers\Admin\Pembayaran;

use App\Controllers\BaseController;

class Pembayaran extends BaseController{

    public function index()
    {
        $data = [
            'title' => 'Data Pembayaran',
            'user_status' => 'Admin'
        ];
        echo view('admin/pages/pembayaran/pembayaran', $data);
    }
    
}

