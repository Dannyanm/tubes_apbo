<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Pembayaran extends BaseController {
    
    public function index()
    {
        $data = [
            'title' => 'Pembayaran',
            'user_status' => 'Customer'
        ];

        echo view('customer/pages/pembayaran/index', $data);
    }
}