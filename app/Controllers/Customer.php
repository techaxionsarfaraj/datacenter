<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Customer extends BaseController
{
    public function index()
    {
        echo view('pages/front/customer/addCustomer');
    }
    public function demo()
    {
        echo view('pages/demo');
    }
}
