<?php

namespace App\Controllers;

use App\Models\User;

class Memberlist extends BaseController
{
    public function index()
    {
        $session = session();
        $userModel = new User();
        $user = $userModel->getUsersById(7);
//        récupérer les données de la session
//        initialisation de l'instance user
//        récupération du user en fonction de son id

        if ($user && $user['IsAdmin'] == 1) {
            if ($this->request->getPost('delete')) {
                $idUtilisateur = $this->request->getPost('cle');
                if ($idUtilisateur !== null) {
                    $userModel->deleteUser($idUtilisateur);
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
                        'nomUtilisateur' => htmlspecialchars($this->request->getPost('nomUtilisateur')),
                    ];
                    $userModel->updateUser($idUtilisateur, $data);
                } else {
                    echo "Erreur: idUtilisateur non spécifié.";
                }
            }

            $data['users'] = $userModel->getAllUsers();
            $data['average_age'] = round($userModel->getAverageAge());
            $data['user_count'] = $userModel->getUserCount();

            return view('memberlist', $data);
        } else {
            return redirect()->to('/');
        }
    }
}