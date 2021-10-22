<?php

namespace App\Controllers\Login;

use App\Controllers\BaseController;

class Login extends BaseController{

    public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        echo view('login/header', $data);
        echo view('login/pages/login');
        echo view('login/footer');
    }
}
?>