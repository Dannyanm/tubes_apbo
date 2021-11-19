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

    // public function detail($slug)
    // {
    //     $data = [
    //         'title' => 'Detail Data Mekanik',
    //         'user_status' => 'Admin',
    //         'mekanik' => $this->mekanikModel->getMekanik($slug)
    //     ];

    //     if(empty($data['mekanik'])){
    //         throw new \CodeIgniter\Exceptions\PageNotFoundException('Mekanik '. $slug . ' tidak ditemukan.');
    //     }

    //     echo view('admin/pages/mekanik/detail', $data);
    // }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Data Mekanik',
            'user_status' => 'Admin',
            'mekanik' => $this->mekanikModel->getMekanik($id)
        ];

        if(empty($data['mekanik'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Mekanik '. $id . ' tidak ditemukan.');
        }

        echo view('admin/pages/mekanik/detail', $data);
    }


    public function create()
    {
        $data = [
            'title' => 'Tambah Data',
            'user_status' => 'Admin',
        ];

        echo view('admin/pages/mekanik/create', $data);
    }

    public function save()
    {
        $slug = url_title($this->request->getVar('nama_mekanik'), '-', true);
        $this->mekanikModel->save([
            'nama_mekanik' => $this->request->getVar('nama_mekanik'),
            'slug' => $slug,
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp')
        ]);

        d($this->request->getVar());

        session()->setFlashdata('message', 'Data Mekanik berhasil ditambahkan!');

        return redirect()->to(base_url('/admin/mekanik'));
    }
    
}

