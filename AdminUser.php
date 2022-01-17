<?php

class AdminUser extends User{

    public int $level;
    public string $role = "admin";

    public function __construct(string $username, string $email, int $level){
        $this->level = $level;
        parent::__construct($username, $email);
    }

    public function message(){
        return "L'administrateur : $this->username, a envoyé un message";
    }

 




}

?>