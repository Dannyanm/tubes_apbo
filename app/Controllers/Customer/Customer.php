<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Customer extends BaseController{
    
    public function index()
    {
        $data = [
            'title' => 'Home Customer',
            'user_status' => 'Customer'
        ];
        echo view('customer/header', $data);
        echo view('customer/pages/home');
        echo view('customer/footer');
    }

    public function booking()
    {
        $data = [
            'title' => 'Booking Service',
            'user_status' => 'Customer'
        ];
        echo view('customer/header', $data);
        echo view('customer/pages/booking');
        echo view('customer/footer');
    }

    public function pembayaran()
    {
        $data = [
            'title' => 'Pembayaran',
            'user_status' => 'Customer'
        ];
        echo view('customer/header', $data);
        echo view('customer/pages/pembayaran');
        echo view('customer/footer');
    }

    public function spareparts()
    {
        $data = [
            'title' => 'Spareparts',
            'user_status' => 'Customer'
        ];
        echo view('customer/header', $data);
        echo view('customer/pages/spareparts');
        echo view('customer/footer');
    }

    public function registration()
    {
        $data = [
            'title' => 'Registrasi Customer',
            'user_status' => 'Customer'
        ];
        echo view('customer/header', $data);
        echo view('customer/pages/registration');
        echo view('customer/footer');
    }

    public function change_password()
    {
        $data = [
            'title' => 'Change Password',
            'user_status' => 'Customer'
        ];
        echo view('customer/header', $data);
        echo view('customer/pages/change_password');
        echo view('customer/footer');
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil',
            'user_status' => 'Customer'
        ];
        echo view('customer/header', $data);
        echo view('customer/pages/profil');
        echo view('customer/footer');
    }

}
?>