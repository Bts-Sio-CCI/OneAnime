<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Shojo extends BaseController
{
    public function index()
    {
        return view('shojo');
    }
}
