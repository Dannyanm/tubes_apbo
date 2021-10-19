<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;

class Customer extends BaseController{

    public function index()
    {
        echo view('users/home');
    }

    public function registration()
    {
        echo view('users/registration');
    }

    public function spareparts()
    {
        echo view('users/spareparts');
    }

    public function booking()
    {
        echo view('users/booking');
    }

    public function change_password()
    {
        echo view('users/change_password');
    }

    public function profil()
    {
        echo view('users/profil');
    }

    public function pembayaran()
    {
        echo view('users/pembayaran');
    }
}
?>