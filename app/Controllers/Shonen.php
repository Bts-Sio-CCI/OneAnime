<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Shonen extends BaseController
{
    public function index()
    {
        return view('shonen');
    }
}
