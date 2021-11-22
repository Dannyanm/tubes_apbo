<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class LoginFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // $auth = service('auth');
        // if(!$auth->isLoggedIn()){
        //     return redirect()->to(base_url('/customer/login'));
        // } 
    
        if(!session('id_customer')){
            return redirect()->to(base_url('/customer/login'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}