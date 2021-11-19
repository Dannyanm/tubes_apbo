<?php

namespace App\Controllers\Admin;

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

