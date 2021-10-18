<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;

class Customer extends BaseController{

    public function index()
    {
        return view('users/home');
    }

    public function registration()
    {
        return view('users/registration');
    }

    public function spareparts()
    {
        return view('users/spareparts');
    }

    public function booking()
    {
        return view('users/booking');
    }

    public function change_password()
    {
        return view('users/change_password');
    }

    public function profil()
    {
        return view('users/profil');
    }

    public function pembayaran()
    {
        return view('users/pembayaran');
    }
}
?>