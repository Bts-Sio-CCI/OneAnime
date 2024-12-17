<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class Register extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function store()
    {
        $session = session();
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nom' => 'required',
            'prenom' => 'required',
            'pseudo' => 'required',
            'email' => 'required|valid_email',
            'dateNaissance' => 'required',
            'adresse' => 'required',
            'cp' => 'required',
            'pass' => 'required|min_length[6]',
            'pass-conf' => 'required|matches[pass]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $userModel = new User();
        $userData = $this->request->getPost();

        if ($userModel->register($userData)) {
            return redirect()->to('login');
        } else {
            return redirect()->back()->with('error', 'Registration failed');
        }
    }
}