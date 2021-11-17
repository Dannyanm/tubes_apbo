<?php

namespace App\Controllers\Admin\Member;

use App\Controllers\BaseController;

class Member extends BaseController{

    public function index()
    {
        $data = [
            'title' => 'Data Member',
            'user_status' => 'Admin'
        ];
        echo view('admin/pages/member/member', $data);
    }
    
}

