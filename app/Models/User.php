<?php

namespace App\Models;

use CodeIgniter\I18n\Time;
use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'utilisateur';
    protected $primaryKey = 'idUtilisateur';
    protected $allowedFields = ['nom', 'prenom', 'email', 'dateNaissance', 'adresse', 'nomUtilisateur', 'motDePasse', 'idCateg', 'IsAdmin'];


    public function register($data)
    {
        $age = $this->calculerAge($data['dateNaissance']);
        $idCateg = $this->getCategorieId($age);

        $userData = [
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'nomUtilisateur' => $data['pseudo'],
            'email' => $data['email'],
            'dateNaissance' => $data['dateNaissance'],
            'adresse' => $data['adresse'],
            'CP' => $data['cp'],
            'motDePasse' => password_hash($data['pass'], PASSWORD_DEFAULT),
            'idCateg' => $idCateg,
            'IsAdmin' => 0
        ];

        return $this->save($userData);
    }

    public function authenticate($email, $password)
    {
        $user = $this->where('email', $email)->first();

        if ($user && isset($user['motDePasse']) && password_verify($password, $user['motDePasse'])) {
            return $user;
        }

        return false;
    }

    function calculerAge($dateNaissance)
    {
        $dateNaissance = new Time($dateNaissance);
        $dateActuelle = new Time();

        $difference = $dateActuelle->diff($dateNaissance);

        $age = $difference->y;
        return $age;
    }

    function getAverageAge()
    {
        $users = $this->getAllUsers();
        $total = 0;
        foreach ($users as $user) {
            $total += $this->calculerAge($user['dateNaissance']);
        }

        return $total / count($users);
    }

    function getCategorieId($age)
    {
        $builder = $this->db->table('catégorie');
        $builder->select('idCateg');
        $builder->where('ageMini <=', $age);
        $builder->where('ageMaxi >=', $age);
        $query = $builder->get();
        $categorie = $query->getRow();
        if($categorie == null){ return 0;}
        return $categorie->idCateg;
    }

    function getUsersByCategories($idCategorie)
    {
        $builder = $this->db->table($this->table);
        $builder->where('idCateg', $idCategorie);
        $query = $builder->get();
        $users = $query->getResult();

        return $users;
    }

    function getUsersById($idUtilisateur)
    {
        $builder = $this->db->table($this->table);
        $builder->where('idUtilisateur', $idUtilisateur);
        $query = $builder->get();
        $users = $query->getRowArray();

        return $users;
    }

    public function getAllUsers()
    {
        return $this->findAll();
    }

    public function getUserCount()
    {
        return $this->countAllResults();
    }

    public function deleteUser($idUtilisateur)
    {
        return $this->delete($idUtilisateur);
    }

    public function updateUser($idUtilisateur, $data)
    {
        return $this->update($idUtilisateur, $data);
    }
}
