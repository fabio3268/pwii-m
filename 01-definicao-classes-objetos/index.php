<?php

require __DIR__ . "/../source/User.php";

// Instancia um objeto chamado $user a partir da classe User
//$user = new \Source\User();
$user = new User();
var_dump($user);

// Acessa os atributos
//$user->name = "Fábio";
//$user->email = "fabiosantos@ifsul.edu.br";
var_dump($user);

// Imprime o conteúdo dos atributos
//echo "Nome: {$user->name} Email {$user->email}";
