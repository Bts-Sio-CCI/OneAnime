<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Fantasy extends BaseController
{
    public function index()
    {
        return view('fantasy');
    }
}
