<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TransaksiModel;
use App\Models\TselesaiModel;

class Tselesai extends BaseController
{
    public function __construct()
    {
        helper('number');
    }
}