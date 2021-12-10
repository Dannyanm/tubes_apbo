<?php

namespace App\Controllers\Customer;
use App\Controllers\BaseController;
use App\Models\SparepartsModel;

class Spareparts extends BaseController {

    protected $sparepartsModel;

    public function __construct()
    {
        $this->sparepartsModel = new SparepartsModel();
        helper('number');
    }
    
    public function index()
    {
        $spareparts = $this->sparepartsModel->findAll();
        $data = [
            'title' => 'Daftar Spareparts',
            'user_status' => 'Customer',
            'spareparts' => $spareparts,
        ];

        echo view('customer/pages/spareparts/index', $data);
    }
}