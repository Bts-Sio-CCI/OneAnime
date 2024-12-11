<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Forum extends BaseController
{
    public function index()
    {
        $session = session();
        
        if (!isset ($session->get['userID'])) {
            return redirect('login');
        }
        
        if (
            isset ($_POST['disconnect']) &&
            $_POST['disconnect'] == 1
        ) {
            session_unset();
            return redirect('login');
        }

        return view('forum');
    }

}
