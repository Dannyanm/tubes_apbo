<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Spareparts extends BaseController{

    public function index()
    {
        $data = [
            'title' => 'Data Spareparts',
            'user_status' => 'Admin'
        ];
        echo view('admin/pages/spareparts/spareparts', $data);
    }

    public function detail()
    {
        $data = [
            'title' => 'Detail Spareparts',
            'user_status' => 'Admin'
        ];
        echo view('admin/pages/spareparts/detail', $data);
    }
    
}

