<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class AdminLogin extends BaseController{

    protected $db;

    public function __construct()
    {
        helper('number');
    }

    public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        echo view('admin/pages/login/index', $data);
    }

    public function login()
    {
        $post = $this->request->getPost();
        $query = $this->db->table('admin')->getWhere(['username' => $post['username']]);
        // $hashPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $user = $query->getRow();

        if($user) {
            if(password_verify($post['password'], $user->password)){
                $params = ['id_admin' => $user->id_admin];
                session()->set($params);
                return redirect()->to(base_url('/admin'));
            } else {
                return redirect()->to(base_url('/admin/adminlogin'))->with('message_error', 'Password salah!');
            }
        } else {
            return redirect()->to(base_url('/admin/adminlogin'))->with('message_error', 'Username tidak ditemukan!');
        }
    }
    
    public function logout()
    {
        // session()->remove('id_admin');
        session_destroy();
        return redirect()->to(base_url('/admin/adminlogin'));
    }
}

?>