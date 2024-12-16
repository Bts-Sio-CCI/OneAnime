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
        $age = $userModel->calculerAge($this->request->getPost('dateNaissance'));
        $idCateg = $userModel->getCategorieId($age);

        $userModel->save([
            'nom' => $this->request->getPost('nom'),
            'prenom' => $this->request->getPost('prenom'),
            'nomUtilisateur' => $this->request->getPost('pseudo'),
            'email' => $this->request->getPost('email'),
            'dateNaissance' => $this->request->getPost('dateNaissance'),
            'adresse' => $this->request->getPost('adresse'),
            'cp' => $this->request->getPost('cp'),
            'motDePasse' => password_hash($this->request->getPost('pass'), PASSWORD_DEFAULT),
            'idCateg' => $idCateg
        ]);

        return redirect()->to('login');
    }
}