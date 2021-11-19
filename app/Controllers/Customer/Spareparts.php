<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Spareparts extends BaseController {
    
    public function index()
    {
        $data = [
            'title' => 'Daftar Spareparts',
            'user_status' => 'Customer'
        ];

        echo view('customer/pages/spareparts/index', $data);
    }
}