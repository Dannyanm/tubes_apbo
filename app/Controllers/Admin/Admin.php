<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin extends BaseController{
    
    public function index()
    {
        $data = [
            'title' => 'Home Admin',
            'user_status' => 'Admin'
        ];
        echo view('admin/pages/home', $data);
    }
    
}

