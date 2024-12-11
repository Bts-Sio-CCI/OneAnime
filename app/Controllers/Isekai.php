<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Isekai extends BaseController
{
    public function index()
    {
        return view('isekai');
    }
}
