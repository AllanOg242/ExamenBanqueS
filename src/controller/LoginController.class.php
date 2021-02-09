<?php

use libs\system\Controller;
use \src\model\LoginRepository;
class LoginController extends controller
{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        return $this->view->load("login/login");
    }
    public function accueil(){
        return $this->view->load("accueil/accueil");
    }

    public function identification()
    {
        $loginDb = new LoginRepository();
        $user = $loginDb->Verifier($_POST['email'], $_POST['mdp']);
        if($user != NULL){
            if($user[0]->getProfil()->getLibelle()=="admin")
            {
                return $this->accueil();
            }elseif ($user[0]->getProfil()->getLibelle()=="caissier"){
                return $this->accueil();
            }
        }else{
            $data['msg'] = "LOGIN OU MOT DE PASSE INCORRECT !!!";
            return $this->view->load("accueil/accueil",$data);
        }
    }
}