<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Booking extends BaseController {
    
    public function index()
    {
        $data = [
            'title' => 'Booking Service',
            'user_status' => 'Customer'
        ];

        echo view('customer/pages/booking/index', $data);
    }
}