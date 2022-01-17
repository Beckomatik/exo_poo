<?php

class User {
    protected string $username;
    protected string $email;
    
    public function __construct(string $username, string $email){

        $this->username = $username;
        $this->email = $email;
    }
    public function addFriend(){
        return $this->email . " a ajouter un nouvel ami ";
    }

    public function message(){
        return "$this->email a envoyer un message";
    }
    public function getEmail(){
        return $this->email;
    }

}
?>