<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Seinen extends BaseController
{
    public function index()
    {
        return view('seinen');
    }
}
