<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Customer extends BaseController{

    public function index()
    {
        $data = [
            'title' => 'Data Member',
            'user_status' => 'Admin'
        ];
        echo view('admin/pages/customer/index', $data);
    }
    
}

