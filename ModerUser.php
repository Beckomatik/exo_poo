<?php

class ModerUser extends User{

    public $level;
    public $role = "moderator";

    public function __construct($username, $email,$level){
        $this->level = $level;
        parent::__construct($username, $email);
    }

    public function message(){
        return "Ce modérateur $this->email a envoyé un message";
    }

    public function role(){
        return "$this->email, est un modérateur de niveau : $this->level";
    }

      
    // je voulais que le modérateur puisse donner (ou enlever des points aux utilisateurs
    // mais je ne sais pas faire l'action agisse sur une autre class, donc la méthode ne marche pas
    public function givePoint(){
        return $this->level +=5;
    }




}

?>