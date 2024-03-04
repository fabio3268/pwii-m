<?php

require __DIR__ . "/../source/User.php";

$user = new User();
$user->setName("Fábio Santos");
$user->setEmail("fabiosantos@ifsul.edu.br");

echo "<div>Meu nome é {$user->getName()}</div>";
echo "<div>Meu e-mail é {$user->getEmail()}</div>";

$userSecond = new User("Débora", "debora@gmail.com");

echo "<div>Meu nome é {$userSecond->getName()}</div>";
echo "<div>Meu e-mail é {$userSecond->getEmail()}</div>";

