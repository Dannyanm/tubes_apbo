<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;

class Customer extends BaseController{

    public function index()
    {
        echo view('users/header');
        echo view('users/pages/home');
        echo view('users/footer');
    }

    public function registration()
    {
        echo view('users/header');
        echo view('users/pages/registration');
        echo view('users/footer');
    }

    public function spareparts()
    {
        echo view('users/header');
        echo view('users/pages/spareparts');
        echo view('users/footer');
    }

    public function booking()
    {
        echo view('users/header');
        echo view('users/pages/booking');
        echo view('users/footer');
    }

    public function change_password()
    {
        echo view('users/header');
        echo view('users/pages/change_password');
        echo view('users/footer');
    }

    public function profil()
    {
        echo view('users/header');
        echo view('users/pages/profil');
        echo view('users/footer');
    }

    public function pembayaran()
    {
        echo view('users/header');
        echo view('users/pages/pembayaran');
        echo view('users/footer');
    }
}
?>