<?php

class PremiumMember extends User{

    public string $role = "premium_member";
    public int $level;

    public function __construct(string $username, string $email, int $level){
    $this->level = $level;
    parent::__construct($username, $email);
    }

  
}
