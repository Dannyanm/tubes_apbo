<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');

        // landing page
        $data = [
            'title' => 'Home | Dadang Cornering'
        ];
        echo view('/home/header', $data);
        echo view('/home/index');
        echo view('/home/header');
    }
}
