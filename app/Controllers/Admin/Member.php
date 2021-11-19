<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Member extends BaseController{

    public function index()
    {
        $data = [
            'title' => 'Data Member',
            'user_status' => 'Admin'
        ];
        echo view('admin/pages/member/index', $data);
    }
    
}

