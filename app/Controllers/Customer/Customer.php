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

}
?>