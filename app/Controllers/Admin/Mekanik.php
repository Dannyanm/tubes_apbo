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
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Mekanik dengan id '. $id . ' tidak ditemukan.');
        }

        echo view('admin/pages/mekanik/detail', $data);
    }


    public function create()
    {
        $kode_mekanik = $this->mekanikModel->kodeMekanik();
        $data = [
            'title' => 'Tambah Data',
            'user_status' => 'Admin',
            'validation' =>\Config\Services::validation(),
            'kode_mekanik' => $kode_mekanik
        ];
        
        echo view('admin/pages/mekanik/create', $data);
    }

    public function save()
    {
        // validation
        if(!$this->validate([
            'nama_mekanik' => [
                'rules' => 'required[mekanik.nama_mekanik]',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required[mekanik.alamat]',
                'errors' => [
                    'required' => 'Alamat harus diisi'
                ]
            ],
            'no_hp' => [
                'rules' => 'required|is_unique[mekanik.no_hp]',
                'errors' => [
                    'required' => 'No. Handphone harus diisi',
                    'is_unique' => 'No. Handphone sudah terdaftar'
                ]
            ]
        ])){

            $validation = \Config\Services::validation();

            return redirect()->to(base_url('/admin/mekanik/create'))->withInput()->with('validation', $validation);
        }

        
        $kode_mekanik = $this->mekanikModel->kodeMekanik();
        $slug = url_title($this->request->getVar('nama_mekanik'), '-', true);
        $this->mekanikModel->save([
            'kode_mekanik' => $kode_mekanik,
            'nama_mekanik' => $this->request->getVar('nama_mekanik'),
            'slug' => $slug,
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp')
        ]);

        session()->setFlashdata('message', 'Data Mekanik berhasil ditambahkan!');

        return redirect()->to(base_url('/admin/mekanik'));
    }

    public function delete($id)
    {
        $this->mekanikModel->delete($id);

        session()->setFlashdata('message', 'Data berhasil dihapus!');

        return redirect()->to(base_url('/admin/mekanik'));
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data',
            'user_status' => 'Admin',
            'validation' =>\Config\Services::validation(),
            'mekanik' => $this->mekanikModel->getMekanik($id)
        ];

        echo view('admin/pages/mekanik/edit', $data);
    }

    public function update($id)
    {
        // validation
        if(!$this->validate([
            'nama_mekanik' => [
                'rules' => 'required[mekanik.nama_mekanik]',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required[mekanik.alamat]',
                'errors' => [
                    'required' => 'Alamat harus diisi'
                ]
            ],
            'no_hp' => [
                'rules' => 'required[mekanik.no_hp]',
                'errors' => [
                    'required' => 'No. Handphone harus diisi'
                ]
            ]
        ])){

            $validation = \Config\Services::validation();

            // return redirect()->to(base_url('/admin/mekanik/edit/'.$this->request->getVar('id')))->withInput()->with('validation', $validation);
            return redirect()->to(base_url('/admin/mekanik/edit'))->withInput()->with('validation', $validation);

            // return redirect()->to(base_url('/admin/mekanik/' . $this->request->getVar('id')));
        }


        $slug = url_title($this->request->getVar('nama_mekanik'), '-', true);
        $this->mekanikModel->save([
            'id' => $id,
            'nama_mekanik' => $this->request->getVar('nama_mekanik'),
            'slug' => $slug,
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp')
        ]);

        session()->setFlashdata('message', 'Data Mekanik berhasil diubah!');

        return redirect()->to(base_url('/admin/mekanik'));
    }
    
}

