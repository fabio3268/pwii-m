<?php

require __DIR__ . "/../source/Models/User.php";

use Source\Models\User;

$user = new User();
$user->setName(NULL);
//$user->setEmail = "fabiosantos@ifsul.edu.br";


echo "<div>Meu nome é {$user->getName()}</div>";
echo "<div>Meu e-mail é {$user->getEmail()}</div>";

$userSecond = new User(1,"Débora", "debora@gmail.com","234567");

echo "<div>Meu nome é {$userSecond->getName()}</div>";
echo "<div>Meu e-mail é {$userSecond->getEmail()}</div>";

