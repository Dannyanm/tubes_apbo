<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Login extends BaseController{

    public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        echo view('admin/pages/login/index', $data);
    }
}

?>