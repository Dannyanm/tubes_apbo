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

        echo view('customer/pages/login/index', $data);
    }

    public function login()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('customer');
        // $query = $builder->get();

        $post = $this->request->getPost();
        // $query = $builder->getWhere(['username' => $post['username']]);
        // $query = $this->db->table('customer')->getWhere(['username' => $post['username']]);
        $query = $this->db->table('customer')->getWhere(['username' => $post['username']]);
        // $hashPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user = $query->getRow();

        // d($hashPassword);
        // d($query);
        // dd(password_verify($post['password'], $user->password));
        // $s = session()->set($params);
        // dd($s);
        

        if($user) {
            if(password_verify($post['password'], $user->password)) {
                $params = [
                            'id_customer' => $user->id_customer,
                            'kode_customer' => $user->kode_customer,
                            'nama_customer' => $user->nama_customer,
                            'alamat_customer' => $user->alamat_customer,
                            'no_hp' => $user->no_hp,
                        ];
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
        // session()->remove('id_customer');
        session_destroy();
        return redirect()->to(base_url('/customer/login'));
    }
}
?>