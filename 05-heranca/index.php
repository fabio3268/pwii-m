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

$patient = new \Source\Records\Patient(
    "José",
    "jose@gmail.com",
    "asdfgfyguhj",
    "12/12/1980"
);

var_dump($doctor,$patient);