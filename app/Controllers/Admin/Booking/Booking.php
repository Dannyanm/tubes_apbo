<?php

namespace App\Controllers\Admin\Booking;

use App\Controllers\BaseController;

class Booking extends BaseController{

    public function index()
    {
        $data = [
            'title' => 'Data Booking',
            'user_status' => 'Admin'
        ];
        echo view('admin/pages/booking/booking', $data);
    }

    
    
}

