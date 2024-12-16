<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Memberlist extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('userID') && $session->get('userID') == 1) {
            $utilisateurModel = new UtilisateurModel();

            if ($this->request->getPost('delete')) {
                $idUtilisateur = $this->request->getPost('cle');
                if ($idUtilisateur !== null) {
                    $utilisateurModel->deleteUtilisateur($idUtilisateur);
                } else {
                    echo "Erreur: idUtilisateur non spécifié.";
                }
            } elseif ($this->request->getPost('update')) {
                $idUtilisateur = $this->request->getPost('cle');
                if ($idUtilisateur !== null) {
                    $data = [
                        'nom' => htmlspecialchars($this->request->getPost('nom')),
                        'prenom' => htmlspecialchars($this->request->getPost('prenom')),
                        'email' => htmlspecialchars($this->request->getPost('email')),
                        'dateNaissance' => htmlspecialchars($this->request->getPost('dateNaissance')),
                        'adresse' => htmlspecialchars($this->request->getPost('adresse')),
                        'nomUtilisateur' => htmlspecialchars($this->request->getPost('nomUtilisateur'))
                    ];
                    $utilisateurModel->updateUtilisateur($idUtilisateur, $data);
                } else {
                    echo "Erreur: idUtilisateur non spécifié.";
                }
            }

            $data['users'] = $utilisateurModel->getAllUsers();
            $data['average_age'] = round($utilisateurModel->getAverageAge());
            $data['user_count'] = $utilisateurModel->getUserCount();

            return view('memberlist', $data);
        } else {
            return redirect()->to('accueil');
        }
    }
}
