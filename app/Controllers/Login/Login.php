<?php

namespace App\Controllers\Login;

use App\Controllers\BaseController;

class Login extends BaseController{

    public function index()
    {
        echo view('login/header');
        echo view('login/pages/loginadmin');
        echo view('login/footer');
    }
}
?>