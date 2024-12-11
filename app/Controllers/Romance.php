<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Romance extends BaseController
{
    public function index()
    {
        return view('romance');
    }
}
