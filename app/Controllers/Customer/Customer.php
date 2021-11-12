<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Customer extends BaseController{
    
    public function index()
    {
        $data = [
            'title' => 'Home Customer',
            'user_status' => 'Customer',
            'test' => ['budi','santoso','sarkem']
        ];
        echo view('customer/pages/home', $data);
    }

    public function booking()
    {
        $data = [
            'title' => 'Booking Service',
            'user_status' => 'Customer'
        ];
        echo view('customer/pages/booking', $data);
    }

    public function pembayaran()
    {
        $data = [
            'title' => 'Pembayaran',
            'user_status' => 'Customer'
        ];
        echo view('customer/pages/pembayaran', $data);
    }

    public function spareparts()
    {
        $data = [
            'title' => 'Spareparts',
            'user_status' => 'Customer'
        ];
        echo view('customer/pages/spareparts', $data);
    }

    public function registration()
    {
        $data = [
            'title' => 'Registrasi Customer',
            'user_status' => 'Customer'
        ];
        echo view('customer/pages/registration', $data);
    }

    public function change_password()
    {
        $data = [
            'title' => 'Change Password',
            'user_status' => 'Customer'
        ];
        echo view('customer/pages/change_password', $data);
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil',
            'user_status' => 'Customer'
        ];
        echo view('customer/pages/profil', $data);
    }

}
?>