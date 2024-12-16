<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function authenticate()
    {
        $session = session();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('pass');

        // Assuming you have a method in User model to validate login
        $userModel = new User();
        $user = $userModel->where('email', $email)->first();

        if ($user && isset($user['password']) && password_verify($password, $user['password'])) {
            $session->set('userID', $user['idUtilisateur']);
            if ($user['idUtilisateur'] == 1) {
                return redirect()->to('memberlist');
            } else {
                return redirect()->to('forum');
            }
        } else {
            return redirect()->back()->with('error', 'Mot de passe erronné');
        }
    }
}