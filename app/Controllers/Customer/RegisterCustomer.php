<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use App\Models\CustomerModel;

class RegisterCustomer extends BaseController {
    public function __construct()
    {
        // $this->load->database();
        $this->customerModel = new CustomerModel();
        helper('number');   
    }

    public function index()
    {
        $kode_customer = $this->customerModel->kodeCustomer();
        $data = [
            'title' => 'Register',
            'user_status' => 'Customer',
            'validation' => \Config\Services::validation(),
            'kode_customer' => $kode_customer,
        ];

        echo view('customer/pages/register/index', $data);
    }

    public function register()
    {
        // validation
        if(!$this->validate([
            'nama_customer' => [
                'rules' => 'required[customer.nama_customer]',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],
            'username' => [
                'rules' => 'required[customer.username]',
                'errors' => [
                    'required' => 'Username harus diisi'
                ]
            ],
            'password' => [
                'rules' => 'required[customer.password]',
                'errors' => [
                    'required' => 'Password harus diisi'
                ]
            ],
            'alamat_customer' => [
                'rules' => 'required[customer.alamat_customer]',
                'errors' => [
                    'required' => 'Alamat harus diisi'
                ]
            ],
            'no_hp' => [
                'rules' => 'required|is_unique[customer.no_hp]',
                'errors' => [
                    'required' => 'No. Handphone harus diisi',
                    'is_unique' => 'No. Handphone sudah terdaftar'
                ]
            ],
        ])){
            $validation = \Config\Services::validation();

            return redirect()->to(base_url('/customer/registercustomer'))->withInput()->with('validation', $validation);
        }

        $kode_customer = $this->customerModel->kodeCustomer();
        
        
        $this->customerModel->save([
            'kode_customer' => $kode_customer,
            'nama_customer' => $this->request->getVar('nama_customer'),
            'username' => $this->request->getVar('username'),
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'alamat_customer' => $this->request->getVar('alamat_customer'),
            'no_hp' => $this->request->getVar('no_hp'),
        ]);

        return redirect()->to(base_url('/customer/customerlogin'))->with('message_success', 'Registrasi berhasil! Silahkan login');
        
    }
}