<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Login extends BaseController{

    protected $db;

    public function __construct()
    {
        
    }

    public function index()
    {
        $data = [
            'title' => 'Login'
        ];

        if(session('id')){
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

        // d($hashPassword);
        // d($query);
        // dd(password_verify($post['password'], $user->password));
        // dd($user);

        if($user) {
            if(password_verify($post['password'], $user->password)) {
                $params = ['id' => $user->id,
                            'nama_customer' => $user->nama_customer];
                session()->set($params);
                return redirect()->to(base_url('/customer'));
            } else {
                return redirect()->to(base_url('/customer/login'))->with('message_error', 'Password salah!');
            }
        } else {
            return redirect()->to(base_url('/customer/login'))->with('message_error', 'Username tidak ditemukan!');
        }
    }

    public function logout()
    {
        session()->remove('id');
        return redirect()->to(base_url('/customer/login'));
    }
}
?>