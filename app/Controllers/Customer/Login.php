<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use App\Models\LoginCustomerModel;

class Login extends BaseController{

    protected $db;

    public function __construct()
    {
        // $this->db = new LoginCustomerModel();
        // $db = \Config\Database::connect();

        // $this->db = new LoginCustomerModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Login'
        ];

        if(session('id_customer')){
            return redirect()->to(base_url('/customer'));
        }

        echo view('customer/pages/login/index', $data);
    }

    public function login()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('customer');
        // $query = $builder->get();

        $post = $this->request->getPost();
        // $query = $builder->getWhere(['username' => $post['username']]);
        $query = $this->db->table('customer')->getWhere(['username' => $post['username']]);
        // $hashPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user = $query->getRow();

        if($user) {
            if(password_verify($post['password'], $user->password)) {
                $params = ['id_customer' => $user->id_customer];
                session()->set($params);
                return redirect()->to(base_url('/customer'));
                
            } else {
                return redirect()->to(base_url('/customer/login'))->with('message', 'Password salah!');
            }
        } else {
            return redirect()->to(base_url('/customer/login'))->with('message', 'Username tidak ditemukan');
        }
    }

    public function logout()
    {
        session()->remove('id_customer');
        return redirect()->to(base_url('/customer/login'));
    }
}
?>