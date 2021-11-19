<?php

namespace App\Controllers\Admin;

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
        echo view('admin/pages/mekanik/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data',
            'user_status' => 'Admin',
        ];

        $model = model(MekanikModel::class);

        echo view('admin/pages/mekanik/create', $data);
    }

    public function save()
    {
        d($this->request->getVar());
    }
    
}

