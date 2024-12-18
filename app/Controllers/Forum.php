<?php

namespace App\Controllers;

class Forum extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get("userID") == null) {
            return redirect('login');
        }
        
        if (
            $this->request->getPost('disconnect') == 1
        ) {
            $session->destroy();
            return redirect('login');
        }

        return view('forum');
    }

}
