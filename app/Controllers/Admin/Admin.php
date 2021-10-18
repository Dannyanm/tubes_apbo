<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin extends BaseController{

    public function index($admin_name = 'budi')
    {
        return view('admin/page_admin');
    }

    public function about()
    {
        echo 'about';
    }
}

