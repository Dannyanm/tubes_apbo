<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Service extends BaseController{

    public function index()
    {
        $data = [
            'title' => 'Data Service',
            'user_status' => 'Admin'
        ];
        echo view('admin/pages/service/index', $data);
    }

    
    
}

