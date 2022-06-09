<?php

/**
 *
 */

require __DIR__ . "/../Classes/User.php";

$user = new User("Fábio","fabiosantos@ifsul.edu.br");

var_dump($user);
$user->setName("Antônio");
$user->setEmail("antonio@email.com");
echo "Nome: {$user->getName()} - Emai: {$user->getEmail()}";