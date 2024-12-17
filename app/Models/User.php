<?php

namespace App\Models;

use CodeIgniter\I18n\Time;
use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'utilisateur';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nom', 'prenom', 'email', 'dateNaissance', 'adresse', 'nomUtilisateur', 'motDePasse', 'idCateg'];


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
            'idCateg' => $idCateg
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
        var_dump($age);
        return $age;
    }

    function calculerMoy()
    {
        $builder = $this->db->table($this->table);
        $builder->selectAvg('age');
        $query = $builder->get();
        $result = $query->getRow();

        return $result->age;
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
}
