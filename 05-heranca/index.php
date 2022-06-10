<?php

require __DIR__ . "/source/autoload.php";

$user = new \Source\General\User(
    "Fábio",
"fabio@gmail.com"
);

var_dump($user);

$doctor = new \Source\Hospital\Doctor(
    "Dráuzio Varela",
    "varela@gmail.com",
    "324567",
    "Oncologista"
);

var_dump($doctor);