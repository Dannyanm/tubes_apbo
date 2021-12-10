<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use App\Models\CustomerModel;

class Customer extends BaseController{

    protected $customerModel;

    public function __construct()
    {
        $this->customerModel = new CustomerModel();
        helper('number');
    }
    
    public function index()
    {
        $data = [
            'title' => 'Home Customer',
            'user_status' => 'Customer',
        ];
        echo view('customer/pages/home', $data);
    }

    public function edit($id_customer)
    {

        $data = [
            'title' => 'Edit Data',
            'user_status' => 'Admin',
            'validation' =>\Config\Services::validation(),
            'customer' => $this->customerModel->getCustomer($id_customer),
        ];

        echo view('customer/pages/edit/edit', $data);
    }

    public function update($id_customer)
    {
        $this->customerModel->save([
            'id_customer' => $id_customer,
            'nama_customer' => $this->request->getVar('nama_customer'),
            'alamat_customer' => $this->request->getVar('alamat_customer'),
            'no_hp' => $this->request->getVar('no_hp'),
        ]);

        session()->setFlashdata('message', 'Profil berhasil diubah! Silahkan login kembali untuk melihat perubahan');

        return redirect()->to(base_url('/customer'));
    }

}
?>