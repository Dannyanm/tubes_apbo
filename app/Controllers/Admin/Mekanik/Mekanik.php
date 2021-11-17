<?php

namespace App\Controllers\Admin\Mekanik;

use App\Controllers\BaseController;
use App\Models\MekanikModel;

class Mekanik extends BaseController{

    protected $mekanikModel;
    public function __construct()
    {
        $this->mekanikModel = new MekanikModel();
    }

    public function index()
    {
        $mekanik = $this->mekanikModel->findAll();

        $data = [
            'title' => 'Data Mekanik',
            'user_status' => 'Admin',
            'mekanik' => $mekanik
        ];


        echo view('admin/pages/mekanik/mekanik', $data);
    }
    
}

