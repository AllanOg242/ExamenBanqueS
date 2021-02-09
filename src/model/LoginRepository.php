<?php
namespace src\model;

use libs\system\Model;


class LoginRepository extends Model{
    /**
     * Methods with DQL (Doctrine Query Language)
     */
    public function __construct(){
        parent::__construct();
    }

    public function Verifier($email, $mdp){
        if($this->db !=null){
            return $this->db->getRepository('User')->findBy(array('email' => $email, 'mdp' => $mdp));
        }
    }

    public function getProfil(){
        return $this->db->creatQuery("SELECT p FROM Profil p")->getResult();
    }
}