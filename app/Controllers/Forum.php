<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Forum extends BaseController
{
    public function index()
    {
        return view('forum');
    }
}
