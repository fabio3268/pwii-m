<?php

require __DIR__ . "/classes/User.php";

$user = new User();

$user->name = "Fábio";
$user->email = "fabiosantos@ifsul.edu.br";

var_dump($user);

echo "Nome: {$user->name} - Email: {$user->email}";