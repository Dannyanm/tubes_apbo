<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginCustomerModel extends Model
{
    protected $table = 'customer';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password'];
    
}