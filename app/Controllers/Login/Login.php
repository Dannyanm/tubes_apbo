<?php

namespace App\Controllers\Login;

use App\Controllers\BaseController;

class Login extends BaseController{

    public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        echo view('login/pages/login', $data);
    }
}
?>