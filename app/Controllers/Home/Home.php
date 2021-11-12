<?php

namespace App\Controllers\Home;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');

        // landing page
        $data = [
            'title' => 'Home | Dadang Cornering'
        ];
        echo view('/home/pages/index', $data);
    }
}
