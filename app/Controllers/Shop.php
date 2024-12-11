<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Shop extends BaseController
{
    public function index()
    {
        return view('shop');
    }
}
