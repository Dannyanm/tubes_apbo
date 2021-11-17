<?php

namespace App\Controllers\Admin\Service;

use App\Controllers\BaseController;

class Service extends BaseController{

    public function index()
    {
        $data = [
            'title' => 'Data Service',
            'user_status' => 'Admin'
        ];
        echo view('admin/pages/service/service', $data);
    }
    
}

