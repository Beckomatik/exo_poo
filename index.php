<?php
require_once("./User.php");
require_once("./AdminUser.php");
require_once("./ModerUser.php");
require_once("./PremiumMember.php");

$userOne = new PremiumMember ("Mario", "mario@contact.com",0);
$userTwo = new User ("Luigi", "luigi@contact.com");
$userThree = new AdminUser ("Zelda", "zelda@contact.com", 10  );
$userFour = new ModerUser ("Yoshi", "yoshi@contact.com", 10  );


echo $userTwo->message().PHP_EOL;
echo $userThree->message().PHP_EOL;
echo $userFour->role().PHP_EOL;

// voir fichier ModerUser
echo $userOne->givePoint().PHP_EOL;

?>