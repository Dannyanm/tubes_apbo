<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SparepartsModel;

class Spareparts extends BaseController{

    protected $sparepartsModel;
    public function __construct()
    {
        $this->sparepartsModel = new SparepartsModel();
    }

    public function index()
    {
        $spareparts = $this->sparepartsModel->findAll();

        $data = [
            'title' => 'Data Spareparts',
            'user_status' => 'Admin',
            'spareparts' => $spareparts,
        ];
        echo view('admin/pages/spareparts/index', $data);
    }

    public function create()
    {
        $kode_spareparts = $this->sparepartsModel->kodeSpareparts();
        $data = [
            'title' => 'Tambah Spareparts',
            'user_status' => 'Admin',
            'kode_spareparts' => $kode_spareparts,
        ];

        echo view('admin/pages/spareparts/create', $data);
    
    }

    public function save()
    {
        // validation
        // if(!$this->validate([
        //     'nama_spareparts' => [
        //         'rules' => 'required[spareparts.nama_spareparts]',
        //         'errors' => [
        //             'required' => 'Nama harus diisi'
        //         ]
        //     ],
        //     'merek_spareparts' => [
        //         'rules' => 'required[spareparts.merek_spareparts]',
        //         'errors' => [
        //             'required' => 'Merek harus diisi'
        //         ]
        //     ],
        //     'jenis_motor' => [
        //         'rules' => 'required[spareparts.jenis_motor]',
        //         'errors' => [
        //             'required' => 'Jenis Motor harus diisi'
        //         ]
        //     ],
        //     'stok_spareparts' => [
        //         'rules' => 'required[spareparts.stok_spareparts]',
        //         'errors' => [
        //             'required' => 'Stok harus diisi'
        //         ]
        //     ],
        //     'harga_spareparts' => [
        //         'rules' => 'required[spareparts.harga_spareparts]',
        //         'errors' => [
        //             'required' => 'Jenis Motor harus diisi'
        //         ]
        //     ]
        // ])){

        //     $validation = \Config\Services::validation();

        //     return redirect()->to(base_url('/customer/order/service'))->withInput()->with('message', 'Cek kembali, pastikan data diinput dengan benar!');
        // }

        // image upload

        $fileGambar = $this->request->getFile('gambar');
        $fileGambar->move('img');

        // ambil nama file
        $namaGambar = $fileGambar->getName();

        $kode_spareparts = $this->sparepartsModel->kodeSpareparts();
        
        $this->sparepartsModel->save([
            'kode_spareparts' => $kode_spareparts,
            'kategori_spareparts' => $this->request->getVar('kategori_spareparts'),
            'merek_spareparts' => $this->request->getVar('merek_spareparts'),
            'jenis_spareparts' => $this->request->getVar('jenis_spareparts'),
            'stok_spareparts' => $this->request->getVar('stok_spareparts'),
            'harga_spareparts' => $this->request->getVar('harga_spareparts'),
            'gambar' => $namaGambar,
        ]);
        
        session()->setFlashdata('message', 'Spareparts berhasil ditambahkan!');

        return redirect()->to(base_url('/admin/spareparts'));

        
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data',
            'user_status' => 'Admin',
            'validation' =>\Config\Services::validation(),
            'spareparts' => $this->sparepartsModel->getSpareparts($id)
        ];

        echo view('admin/pages/spareparts/edit', $data);
    }

    public function update($id)
    {
        $this->sparepartsModel->save([
            'id' => $id,
            'nama_mekanik' => $this->request->getVar('nama_mekanik'),
            'stok_spareparts' => $this->request->getVar('stok_spareparts'),
            'harga_spareparts' => $this->request->getVar('harga_spareparts')
            
        ]);

        session()->setFlashdata('message', 'Data Spareparts berhasil diupdate!');

        return redirect()->to(base_url('/admin/spareparts'));
    }

    public function delete($id)
    {
        $this->sparepartsModel->delete($id);

        session()->setFlashdata('message', 'Data berhasil dihapus!');

        return redirect()->to(base_url('/admin/spareparts'));
    }
    
}

